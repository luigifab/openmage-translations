Stop russian war. **🇺🇦 Free Ukraine!**

### Installation in OpenMage

Warning! Experimental.

- remove all `app/locales/*/Mage_*.csv`
- run: `composer require luigifab/openmage-translations`

### Installation for translators

- `git clone git@github.com:luigifab/openmage-translations.git xyz`
- `cd xyz/`
- `git clone git@github.com:OpenMage/magento-lts.git src-openmage`
- `cd src-openmage/`
- please read line 39 of translate.php for extra languages packs
- `wget https://patch-diff.githubusercontent.com/raw/OpenMage/magento-lts/pull/1618.diff`
- `git apply 1618.diff`
- `wget https://patch-diff.githubusercontent.com/raw/OpenMage/magento-lts/pull/1621.diff`
- `git apply 1621.diff`

### Usage for translators

- download CSV files from M2: `php translate.php downloadm2`
- update CSV files for OpenMage: `php translate.php update`

You will found in `src-untranslated/` directory missing translations.

You can update CSV files in `src-untranslated/`, then run: `php translate.php update` to update files in `locales/`.

### Stats

| Locale  | CSV used | Strings translated | Percent |
| ------- | --------:| ------------------:| -------:|
| af_ZA   |        2 |             2/7270 |   0.03% |
| am_ET   |        0 |             0/7270 |   0.00% |
| ar_EG   |       50 |           839/7270 |  11.54% |
| ar_SA   |       61 |          2322/7270 |  31.94% |
| be_BY   |       43 |            96/7270 |   1.32% |
| bg_BG   |       61 |          4341/7270 |  59.71% |
| bn_BD   |       24 |             9/7270 |   0.12% |
| ca_ES   |       60 |           833/7270 |  11.46% |
| cs_CZ   |       61 |          4219/7270 |  58.03% |
| cy_GB   |       55 |           358/7270 |   4.92% |
| da_DK   |       61 |          3582/7270 |  49.27% |
| de_AT   |        4 |             2/7270 |   0.03% |
| de_CH   |       61 |          3081/7270 |  42.38% |
| de_DE   |       64 |          6772/7270 |  93.15% |
| el_GR   |       61 |          3961/7270 |  54.48% |
| en_AU   |       21 |            16/7270 |   0.22% |
| en_GB   |       23 |            69/7270 |   0.95% |
| es_AR   |       61 |          3319/7270 |  45.65% |
| es_CL   |       60 |          1740/7270 |  23.93% |
| es_CO   |       59 |          2157/7270 |  29.67% |
| es_CR   |        2 |             1/7270 |   0.01% |
| es_ES   |       61 |          3150/7270 |  43.33% |
| es_MX   |       61 |          4464/7270 |  61.40% |
| es_VE   |        2 |             1/7270 |   0.01% |
| et_EE   |       61 |          1622/7270 |  22.31% |
| fa_IR   |       61 |          3174/7270 |  43.66% |
| fi_FI   |       61 |          3271/7270 |  44.99% |
| fil_PH  |       23 |             7/7270 |   0.10% |
| fr_CA   |       61 |          3931/7270 |  54.07% |
| fr_FR   |       61 |          6377/7270 |  87.72% |
| gl_ES   |       60 |          2947/7270 |  40.54% |
| gu_IN   |       58 |          1446/7270 |  19.89% |
| he_IL   |       61 |          3859/7270 |  53.08% |
| hi_IN   |       60 |          1294/7270 |  17.80% |
| hr_HR   |       61 |          2035/7270 |  27.99% |
| hu_HU   |       61 |          3622/7270 |  49.82% |
| id_ID   |       61 |          3006/7270 |  41.35% |
| is_IS   |       54 |           265/7270 |   3.65% |
| it_IT   |       61 |          4297/7270 |  59.11% |
| ja_JP   |       61 |          4484/7270 |  61.68% |
| ka_GE   |       41 |           431/7270 |   5.93% |
| km_KH   |        0 |             0/7270 |   0.00% |
| kn_IN   |       61 |          1679/7270 |  23.09% |
| ko_KR   |       60 |          1485/7270 |  20.43% |
| lt_LT   |       61 |          2332/7270 |  32.08% |
| lv_LV   |       61 |          2164/7270 |  29.77% |
| mk_MK   |       59 |          1165/7270 |  16.02% |
| ml_IN   |       60 |           653/7270 |   8.98% |
| ms_MY   |       23 |            36/7270 |   0.50% |
| my_MM   |       32 |            18/7270 |   0.25% |
| nb_NO   |       61 |          3581/7270 |  49.26% |
| nl_BE   |       61 |          2928/7270 |  40.28% |
| nl_NL   |       61 |          4173/7270 |  57.40% |
| nn_NO   |       61 |          2038/7270 |  28.03% |
| pl_PL   |       61 |          4305/7270 |  59.22% |
| pt_BR   |       61 |          4429/7270 |  60.92% |
| pt_PT   |       61 |          2726/7270 |  37.50% |
| ro_RO   |       64 |          6683/7270 |  91.93% |
| ru_RU   |       61 |          3490/7270 |  48.01% |
| si_LK   |        0 |             0/7270 |   0.00% |
| sk_SK   |       61 |          2593/7270 |  35.67% |
| sl_SI   |       58 |           559/7270 |   7.69% |
| so_SO   |        0 |             0/7270 |   0.00% |
| sq_AL   |       46 |            99/7270 |   1.36% |
| sv_FI   |       61 |          2102/7270 |  28.91% |
| sv_SE   |       61 |          3567/7270 |  49.06% |
| sw_KE   |       15 |            19/7270 |   0.26% |
| sw_TZ   |       15 |            18/7270 |   0.25% |
| th_TH   |       61 |          2417/7270 |  33.25% |
| tl_PH   |        0 |             0/7270 |   0.00% |
| tr_TR   |       61 |          4527/7270 |  62.27% |
| uk_UA   |       61 |          2619/7270 |  36.02% |
| ur_IN   |        0 |             0/7270 |   0.00% |
| ur_PK   |       35 |            63/7270 |   0.87% |
| uz_UZ   |       60 |           537/7270 |   7.39% |
| vi_VN   |       61 |          3136/7270 |  43.14% |
| zh_CN   |       61 |          4525/7270 |  62.24% |
| zh_HK   |        2 |             1/7270 |   0.01% |
| zh_TW   |       61 |          2484/7270 |  34.17% |
