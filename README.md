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
| af_ZA   |        2 |             2/7100 |   0.03% |
| am_ET   |        1 |             0/7100 |   0.00% |
| ar_EG   |       50 |           833/7100 |  11.73% |
| ar_SA   |       61 |          2295/7100 |  32.32% |
| be_BY   |       43 |            93/7100 |   1.31% |
| bg_BG   |       61 |          4253/7100 |  59.90% |
| bn_BD   |       24 |             9/7100 |   0.13% |
| ca_ES   |       60 |           826/7100 |  11.63% |
| cs_CZ   |       61 |          4130/7100 |  58.17% |
| cy_GB   |       55 |           357/7100 |   5.03% |
| da_DK   |       61 |          3512/7100 |  49.46% |
| de_AT   |        4 |             2/7100 |   0.03% |
| de_CH   |       61 |          3039/7100 |  42.80% |
| de_DE   |       64 |          6659/7100 |  93.79% |
| el_GR   |       61 |          3915/7100 |  55.14% |
| en_AU   |       21 |            16/7100 |   0.23% |
| en_GB   |       23 |            69/7100 |   0.97% |
| es_AR   |       61 |          3276/7100 |  46.14% |
| es_CL   |       60 |          1678/7100 |  23.63% |
| es_CO   |       59 |          2137/7100 |  30.10% |
| es_CR   |        2 |             1/7100 |   0.01% |
| es_ES   |       61 |          3108/7100 |  43.77% |
| es_MX   |       61 |          4377/7100 |  61.65% |
| es_VE   |        2 |             1/7100 |   0.01% |
| et_EE   |       61 |          1590/7100 |  22.39% |
| fa_IR   |       61 |          3132/7100 |  44.11% |
| fi_FI   |       61 |          3243/7100 |  45.68% |
| fil_PH  |       23 |             7/7100 |   0.10% |
| fr_CA   |       61 |          3887/7100 |  54.75% |
| fr_FR   |       61 |          6265/7100 |  88.24% |
| gl_ES   |       60 |          2863/7100 |  40.32% |
| gu_IN   |       58 |          1420/7100 |  20.00% |
| he_IL   |       61 |          3772/7100 |  53.13% |
| hi_IN   |       60 |          1268/7100 |  17.86% |
| hr_HR   |       61 |          2015/7100 |  28.38% |
| hu_HU   |       61 |          3535/7100 |  49.79% |
| id_ID   |       61 |          2965/7100 |  41.76% |
| is_IS   |       54 |           264/7100 |   3.72% |
| it_IT   |       61 |          4216/7100 |  59.38% |
| ja_JP   |       61 |          4399/7100 |  61.96% |
| ka_GE   |       41 |           427/7100 |   6.01% |
| km_KH   |        1 |             0/7100 |   0.00% |
| kn_IN   |       61 |          1651/7100 |  23.25% |
| ko_KR   |       60 |          1483/7100 |  20.89% |
| lt_LT   |       61 |          2309/7100 |  32.52% |
| lv_LV   |       61 |          2136/7100 |  30.08% |
| mk_MK   |       59 |          1155/7100 |  16.27% |
| ml_IN   |       60 |           634/7100 |   8.93% |
| ms_MY   |       23 |            35/7100 |   0.49% |
| my_MM   |       32 |            17/7100 |   0.24% |
| nb_NO   |       61 |          3538/7100 |  49.83% |
| nl_BE   |       61 |          2886/7100 |  40.65% |
| nl_NL   |       61 |          4087/7100 |  57.56% |
| nn_NO   |       61 |          2018/7100 |  28.42% |
| pl_PL   |       61 |          4216/7100 |  59.38% |
| pt_BR   |       61 |          4346/7100 |  61.21% |
| pt_PT   |       61 |          2688/7100 |  37.86% |
| ro_RO   |       64 |          6574/7100 |  92.59% |
| ru_RU   |       61 |          3402/7100 |  47.92% |
| si_LK   |       60 |          2892/7100 |  40.73% |
| sk_SK   |       61 |          2571/7100 |  36.21% |
| sl_SI   |       58 |           557/7100 |   7.85% |
| so_SO   |        1 |             0/7100 |   0.00% |
| sq_AL   |       46 |            98/7100 |   1.38% |
| sv_FI   |       61 |          2088/7100 |  29.41% |
| sv_SE   |       61 |          3489/7100 |  49.14% |
| sw_KE   |       15 |            19/7100 |   0.27% |
| sw_TZ   |       25 |            29/7100 |   0.41% |
| th_TH   |       61 |          2386/7100 |  33.61% |
| tl_PH   |        1 |             0/7100 |   0.00% |
| tr_TR   |       61 |          4437/7100 |  62.49% |
| uk_UA   |       61 |          2601/7100 |  36.63% |
| ur_IN   |        1 |             0/7100 |   0.00% |
| ur_PK   |       35 |            63/7100 |   0.89% |
| uz_UZ   |       60 |           533/7100 |   7.51% |
| vi_VN   |       61 |          3094/7100 |  43.58% |
| zh_CN   |       61 |          4437/7100 |  62.49% |
| zh_HK   |        2 |             1/7100 |   0.01% |
| zh_TW   |       61 |          2462/7100 |  34.68% |
