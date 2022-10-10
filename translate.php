<?php
/**
 * Created L/10/12/2012
 * Updated S/24/09/2022
 *
 * Copyright 2012-2022 | Fabrice Creuzot (luigifab) <code~luigifab~fr>
 * https://github.com/luigifab/translator
 *
 * This program is free software, you can redistribute it or modify
 * it under the terms of the Open Software License (OSL) version 3,
 * or under the terms of the Academic Free License (AFL) version 3.
 *
 * This program is distributed in the hope that it will be useful,
 * but without any warranty, without even the implied warranty of
 * merchantability or fitness for a particular purpose. See the
 * Open Software License (OSL) or the Academic Free License (AFL)
 * for more details.
 */

chdir(__DIR__);
error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set('UTC');
header('Content-Type: text/plain; charset=utf-8');

if (PHP_SAPI != 'cli')
	exit('Run me only with cli.');

function fileGetContents(string $url) {

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 8);
	curl_setopt($ch, CURLOPT_TIMEOUT, 20);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0');

	$result = curl_exec($ch);
	$result = (($result === false) || (curl_errno($ch) !== 0)) ? trim('CURL_ERROR '.curl_errno($ch).' '.curl_error($ch)) : $result;
	curl_close($ch);

	return $result;
}

function writeFile(string $file, string $final) {

	if (empty($final)) {
		echo "\n";
		if (is_file($file))
			unlink($file);
	}
	else {
		file_put_contents($file, $final);
		echo realpath($file),"\n";
	}
}

function generateCSV(array $sourceStrings, array $translatedStrings, bool $allLines = false, bool $onlyMissing = false) {

	$data = [];

	foreach ($sourceStrings as $string) {

		$translation = array_key_exists($string, $translatedStrings) ? $translatedStrings[$string] : false;

		// in $sourceStrings we have 'The OpenMage cache storage has been flushed.'
		// retry with Magento instead of OpenMage in source string
		if (empty($translation)) {
			$search = str_replace('OpenMage', 'Magento', $string);
			$translation = array_key_exists($search, $translatedStrings) ? $translatedStrings[$search] : false;
		}

		// replace Magento by OpenMage in transalated string
		if (!empty($translation))
			$translation = str_replace('Magento', 'OpenMage', $translation);

		if ($allLines) {
			if (!empty($translation))
				$data[] = '"'.str_replace('"', '""', $string).'","'.str_replace('"', '""', $translation).'"';
			else
				$data[] = '"'.str_replace('"', '""', $string).'",""';
		}
		else if ($onlyMissing) {
			if (empty($translation))
				$data[] = '"'.str_replace('"', '""', $string).'",""';
		}
		else if (!empty($translation) && ($translation != $string)) {
			$data[] = '"'.str_replace('"', '""', $string).'","'.str_replace('"', '""', $translation).'"';
		}
	}

	return implode("\n", $data);
}

function loadCSV(array $files, bool $onlyKeys = false) {

	$data = [];

	foreach ($files as $file) {

		if (!is_file($file))
			continue;

		$resource = fopen($file, 'rb');

		while (($line = fgetcsv($resource, 2500)) !== false) {
			$line = (array) $line; // (yes)
			if (!empty($line[0]) && !empty($line[1]) && empty($data[$line[0]]))
				$data[$line[0]] = rtrim(stripslashes($line[1]), "\r\n");
		}

		fclose($resource);
	}

	return $onlyKeys ? array_keys($data) : $data;
}

if (in_array('downloadm2', $argv)) {

	$repos = json_decode(fileGetContents('https://api.github.com/users/magento-l10n/repos?per_page=100'), true);
	if (!is_dir('./src-magento2/'))
		mkdir('./src-magento2/', 0755);

	foreach ($repos as $repo) {

		$repo = $repo['full_name'];
		if (stripos($repo, 'magento-l10n/language-') !== false) {

			$locale = substr($repo, strrpos($repo, '-') + 1);
			if (!is_dir('./src-magento2/'.$locale))
				mkdir('./src-magento2/'.$locale, 0755);

			$data = fileGetContents('https://raw.githubusercontent.com/'.$repo.'/master/'.$locale.'.csv');
			if ((mb_strlen($data) > 50) && (mb_stripos($data, ',') !== false)) {
				echo $locale,"\n";
				file_put_contents('./src-magento2/'.$locale.'/Mage_Magento2.csv', $data);
			}

			usleep(100000);
		}
	}
}
else if (in_array('update', $argv)) {

	if (!is_dir('./src-untranslated/'))
		mkdir('./src-untranslated/', 0755);

	// translations sorted by priority
	$sources = [
		'./locales/',
		'./src-untranslated/',
		'./src-magento2/',               // php .../translate.php downloadm2
		'./src-riconeitzel/app/locale/', // git clone https://github.com/riconeitzel/German_LocalePack_de_DE src-riconeitzel
		'./src-versedi/app/locale/',     // git clone https://github.com/versedi/Magento-Locales src-versedi
	];

	// load source strings from english CSV files from OpenMage
	$models = glob('./src-openmage/app/locale/en_US/Mage_*.csv');
	$sourceStrings = [];
	foreach ($models as $file)
		$sourceStrings = array_merge($sourceStrings, loadCSV([$file]));

	$sourceStrings = array_values($sourceStrings);
	$countSource   = count($sourceStrings);

	// search available locales from sources directories
	$locales = [];
	foreach ($sources as $source) {
		if (is_dir($source))
			$locales = array_merge($locales, scandir($source));
	}

	$locales = array_unique($locales);
	sort($locales);

	// markdown
	echo '| Locale  | CSV used | Strings translated | Percent |',"\n";
	echo '| ------- | --------:| ------------------:| -------:|',"\n";
	$col1 = '-------';
	$col2 = '--------';
	$col3 = '------------------';
	$col4 = '-------';

	// action
	$ignore = ['en_US', 'ckb_IR', 'de_DU', 'en_ID', 'en_PT', 'ku_TR', 'nl_DI', 'nl_di', 'no_NO', 'sr_CS', 'sr_SP'];
	foreach ($locales as $locale) {

		if (!in_array($locale, $ignore) && (mb_strlen($locale) >= 5)) {

			// load translations from all src directories
			$files = [];
			foreach ($sources as $source) {
				if (is_dir($source.$locale))
					$files = array_merge($files, glob($source.$locale.'/*.csv'));
			}

			$translatedStrings = loadCSV($files);
			foreach ($translatedStrings as $key => $value) {
				if (($key == $value) || empty($value))
					unset($translatedStrings[$key]);
			}

			// markdown
			$countTranslated = 0;
			foreach ($sourceStrings as $string) {
				if (array_key_exists($string, $translatedStrings) && ($translatedStrings[$string] != $string))
					$countTranslated++;
			}

			echo '| ',str_pad($locale, strlen($col1)),' ',
				'| ',str_pad(count($files), strlen($col2), ' ', STR_PAD_LEFT),' ',
				'| ',str_pad($countTranslated.'/'.$countSource, strlen($col3), ' ', STR_PAD_LEFT),' ',
				'| ',str_pad(number_format(round($countTranslated * 100 / $countSource, 2), 2).'%', strlen($col4), ' ', STR_PAD_LEFT),' |',"\n";

			// update csv files
			foreach ($models as $file) {

				$model = array_unique(loadCSV([$file]));
				$final = generateCSV($model, $translatedStrings);

				// translated csv files
				$file = './locales/'.$locale.'/'.basename($file);
				if (!empty($final)) {
					if (!is_dir(dirname($file)))
						mkdir(dirname($file), 0755);
					file_put_contents($file, $final);
				}
				else if (is_file($file)) {
					unlink($file);
				}

				// untranslated csv file
				$final = generateCSV($model, $translatedStrings, false, true);
				$file = './src-untranslated/'.$locale.'/Mage_Todo.csv';
				if (!empty($final)) {
					if (!is_dir(dirname($file)))
						mkdir(dirname($file), 0755);
					file_put_contents($file, $final);
				}
				else if (is_file($file)) {
					unlink($file);
				}
			}
		}
	}

	// composer.json
	$content = file_get_contents('./composer.json');
	$files = [];
	$data  = [];

	exec('find locales/ -type f', $files);
	foreach ($files as $file) {
		$file = str_replace('locales/', '', $file);
		$data[$file] = '            ["locales/'.$file.'", "app/locale/'.$file.'"],';
	}

	ksort($data);
	$inline  = implode("\n", $data);
	$inline  = mb_substr($inline, 0, -1);
	$content = preg_replace('#extra": {[^}]+}#', "extra\": {\n        \"map\": [\n$inline\n        ]\n    }", $content);

	file_put_contents('./composer.json', $content);
}
else {
	echo 'Usage: php .../translate.php [downloadm2] [update]',"\n";
}