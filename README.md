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
| af_ZA   |       51 |             2/7184 |   0.03% |
| am_ET   |        1 |             0/7184 |   0.00% |
| ar_EG   |       51 |           839/7184 |  11.68% |
| ar_SA   |        2 |          2318/7184 |  32.27% |
| be_BY   |       51 |            96/7184 |   1.34% |
| bg_BG   |       52 |          4152/7184 |  57.80% |
| bn_BD   |        2 |             9/7184 |   0.13% |
| ca_ES   |        2 |           833/7184 |  11.60% |
| cs_CZ   |       53 |          4216/7184 |  58.69% |
| cy_GB   |       51 |           358/7184 |   4.98% |
| da_DK   |       52 |          3582/7184 |  49.86% |
| de_AT   |       51 |             2/7184 |   0.03% |
| de_CH   |        2 |          3077/7184 |  42.83% |
| de_DE   |      135 |          6771/7184 |  94.25% |
| el_GR   |       52 |          3957/7184 |  55.08% |
| en_AU   |        2 |            16/7184 |   0.22% |
| en_GB   |        2 |            69/7184 |   0.96% |
| es_AR   |       52 |          3315/7184 |  46.14% |
| es_CL   |       51 |          1740/7184 |  24.22% |
| es_CO   |       51 |          2157/7184 |  30.03% |
| es_CR   |       51 |             1/7184 |   0.01% |
| es_ES   |        2 |          3146/7184 |  43.79% |
| es_MX   |       52 |          4460/7184 |  62.08% |
| es_VE   |       51 |             1/7184 |   0.01% |
| et_EE   |        2 |          1621/7184 |  22.56% |
| fa_IR   |        2 |          3170/7184 |  44.13% |
| fi_FI   |       52 |          3270/7184 |  45.52% |
| fil_PH  |        2 |             7/7184 |   0.10% |
| fr_CA   |       52 |          3927/7184 |  54.66% |
| fr_FR   |       52 |          4349/7184 |  60.54% |
| gl_ES   |       51 |          2947/7184 |  41.02% |
| gu_IN   |        2 |          1446/7184 |  20.13% |
| he_IL   |       52 |          3857/7184 |  53.69% |
| hi_IN   |       52 |          1294/7184 |  18.01% |
| hr_HR   |       52 |          2035/7184 |  28.33% |
| hu_HU   |       52 |          3618/7184 |  50.36% |
| id_ID   |        2 |          3002/7184 |  41.79% |
| is_IS   |       52 |           265/7184 |   3.69% |
| it_IT   |       52 |          4291/7184 |  59.73% |
| ja_JP   |       52 |          4480/7184 |  62.36% |
| ka_GE   |       51 |           431/7184 |   6.00% |
| km_KH   |        1 |             0/7184 |   0.00% |
| kn_IN   |        2 |          1676/7184 |  23.33% |
| ko_KR   |       52 |          1483/7184 |  20.64% |
| lt_LT   |       52 |          2331/7184 |  32.45% |
| lv_LV   |       52 |          2158/7184 |  30.04% |
| mk_MK   |       52 |          1165/7184 |  16.22% |
| ml_IN   |        2 |           651/7184 |   9.06% |
| ms_MY   |       51 |            36/7184 |   0.50% |
| my_MM   |        2 |            18/7184 |   0.25% |
| nb_NO   |       52 |          3578/7184 |  49.81% |
| nl_BE   |        2 |          2924/7184 |  40.70% |
| nl_NL   |       52 |          4169/7184 |  58.03% |
| nn_NO   |       52 |          2035/7184 |  28.33% |
| pl_PL   |       52 |          4300/7184 |  59.86% |
| pt_BR   |       52 |          4425/7184 |  61.60% |
| pt_PT   |        2 |          2722/7184 |  37.89% |
| ro_RO   |       69 |          6683/7184 |  93.03% |
| ru_RU   |       52 |          3488/7184 |  48.55% |
| si_LK   |        1 |             0/7184 |   0.00% |
| sk_SK   |       45 |          2593/7184 |  36.09% |
| sl_SI   |       51 |           559/7184 |   7.78% |
| so_SO   |        1 |             0/7184 |   0.00% |
| sq_AL   |       52 |            99/7184 |   1.38% |
| sv_FI   |        2 |          2100/7184 |  29.23% |
| sv_SE   |       52 |          3565/7184 |  49.62% |
| sw_KE   |       52 |            19/7184 |   0.26% |
| sw_TZ   |        2 |            18/7184 |   0.25% |
| th_TH   |       52 |          2417/7184 |  33.64% |
| tl_PH   |        1 |             0/7184 |   0.00% |
| tr_TR   |       52 |          4523/7184 |  62.96% |
| uk_UA   |       52 |          2619/7184 |  36.46% |
| ur_IN   |        1 |             0/7184 |   0.00% |
| ur_PK   |        2 |            63/7184 |   0.88% |
| uz_UZ   |        2 |           537/7184 |   7.47% |
| vi_VN   |       52 |          3132/7184 |  43.60% |
| zh_CN   |       52 |          4521/7184 |  62.93% |
| zh_HK   |       51 |             1/7184 |   0.01% |
| zh_TW   |       52 |          2484/7184 |  34.58% |
