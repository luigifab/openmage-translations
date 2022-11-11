Stop russian war. **🇺🇦 Free Ukraine!**

### Installation in OpenMage

- remove all `app/locales/*/Mage_*.csv`
- run: `composer require luigifab/openmage-translations`

### Installation for translators

- `git clone git@github.com:luigifab/openmage-translations.git xyz`
- `cd xyz/`
- `git clone git@github.com:OpenMage/magento-lts.git src-openmage`
- `cd src-openmage/`
- `git apply ../1359.diff`
- `cd ../`
- please read line 150 of translate.php for extra languages packs

### Usage for translators

- download CSV files from M2: `php translate.php downloadm2`
- update CSV files for OpenMage: `php translate.php update`

You will found in `src-untranslated/` directory missing translations.

You can update CSV files in `src-untranslated/`, then run: `php translate.php update` (with PHP 7.2 / 7.3 / 7.4 / 8.0 / 8.1 / 8.2) to update files in `locales/`.

### Stats

| Locale  | CSV used | Strings translated | Percent |
| ------- | --------:| ------------------:| -------:|
| af_ZA   |        2 |             2/7105 |   0.03% |
| am_ET   |        1 |             0/7105 |   0.00% |
| ar_EG   |       50 |           833/7105 |  11.72% |
| ar_SA   |       61 |          2300/7105 |  32.37% |
| be_BY   |       43 |            93/7105 |   1.31% |
| bg_BG   |       61 |          4256/7105 |  59.90% |
| bn_BD   |       24 |             9/7105 |   0.13% |
| ca_ES   |       60 |           828/7105 |  11.65% |
| cs_CZ   |       61 |          4133/7105 |  58.17% |
| cy_GB   |       55 |           357/7105 |   5.02% |
| da_DK   |       61 |          3515/7105 |  49.47% |
| de_AT   |        4 |             2/7105 |   0.03% |
| de_CH   |       61 |          3042/7105 |  42.81% |
| de_DE   |       64 |          6662/7105 |  93.76% |
| el_GR   |       61 |          3918/7105 |  55.14% |
| en_AU   |       21 |            29/7105 |   0.41% |
| en_GB   |       23 |            69/7105 |   0.97% |
| es_AR   |       61 |          3281/7105 |  46.18% |
| es_CL   |       60 |          1678/7105 |  23.62% |
| es_CO   |       59 |          2137/7105 |  30.08% |
| es_CR   |        2 |             1/7105 |   0.01% |
| es_ES   |       61 |          3115/7105 |  43.84% |
| es_MX   |       61 |          4382/7105 |  61.67% |
| es_VE   |        2 |             1/7105 |   0.01% |
| et_EE   |       61 |          1593/7105 |  22.42% |
| fa_IR   |       61 |          3135/7105 |  44.12% |
| fi_FI   |       61 |          3246/7105 |  45.69% |
| fil_PH  |       23 |             7/7105 |   0.10% |
| fr_CA   |       61 |          3890/7105 |  54.75% |
| fr_FR   |       61 |          6268/7105 |  88.22% |
| gl_ES   |       60 |          2863/7105 |  40.30% |
| gu_IN   |       58 |          1422/7105 |  20.01% |
| he_IL   |       61 |          3775/7105 |  53.13% |
| hi_IN   |       60 |          1269/7105 |  17.86% |
| hr_HR   |       61 |          2015/7105 |  28.36% |
| hu_HU   |       61 |          3537/7105 |  49.78% |
| id_ID   |       61 |          2967/7105 |  41.76% |
| is_IS   |       54 |           264/7105 |   3.72% |
| it_IT   |       61 |          4220/7105 |  59.39% |
| ja_JP   |       61 |          4402/7105 |  61.96% |
| ka_GE   |       41 |           427/7105 |   6.01% |
| km_KH   |        1 |             0/7105 |   0.00% |
| kn_IN   |       61 |          1652/7105 |  23.25% |
| ko_KR   |       60 |          1486/7105 |  20.91% |
| lt_LT   |       61 |          2309/7105 |  32.50% |
| lv_LV   |       61 |          2138/7105 |  30.09% |
| mk_MK   |       59 |          1155/7105 |  16.26% |
| ml_IN   |       60 |           636/7105 |   8.95% |
| ms_MY   |       23 |            35/7105 |   0.49% |
| my_MM   |       32 |            17/7105 |   0.24% |
| nb_NO   |       61 |          3541/7105 |  49.84% |
| nl_BE   |       61 |          2893/7105 |  40.72% |
| nl_NL   |       61 |          4093/7105 |  57.61% |
| nn_NO   |       61 |          2021/7105 |  28.44% |
| pl_PL   |       61 |          4219/7105 |  59.38% |
| pt_BR   |       61 |          4349/7105 |  61.21% |
| pt_PT   |       61 |          2691/7105 |  37.87% |
| ro_RO   |       64 |          6576/7105 |  92.55% |
| ru_RU   |       61 |          3405/7105 |  47.92% |
| si_LK   |       60 |          2892/7105 |  40.70% |
| sk_SK   |       61 |          2573/7105 |  36.21% |
| sl_SI   |       58 |           557/7105 |   7.84% |
| so_SO   |        1 |             0/7105 |   0.00% |
| sq_AL   |       46 |            98/7105 |   1.38% |
| sv_FI   |       61 |          2093/7105 |  29.46% |
| sv_SE   |       61 |          3492/7105 |  49.15% |
| sw_KE   |       15 |            19/7105 |   0.27% |
| sw_TZ   |       25 |            29/7105 |   0.41% |
| th_TH   |       61 |          2415/7105 |  33.99% |
| tl_PH   |        1 |             0/7105 |   0.00% |
| tr_TR   |       61 |          4440/7105 |  62.49% |
| uk_UA   |       61 |          2604/7105 |  36.65% |
| ur_IN   |        1 |             0/7105 |   0.00% |
| ur_PK   |       35 |            63/7105 |   0.89% |
| uz_UZ   |       60 |           536/7105 |   7.54% |
| vi_VN   |       61 |          3096/7105 |  43.57% |
| zh_CN   |       61 |          4440/7105 |  62.49% |
| zh_HK   |        2 |             1/7105 |   0.01% |
| zh_TW   |       61 |          2465/7105 |  34.69% |
