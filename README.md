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

You can update CSV files in `src-untranslated/`, then run: `php translate.php update` (with PHP 7.2 / 7.3 / 7.4 / 8.0 / 8.1 / 8.2 / 8.3) to update files in `locales/`.

### Stats for OpenMage 20.4.0

| Locale  | CSV used | Strings translated | Percent    |
| ------- | --------:| ------------------:| ----------:|
| ar_EG   |       50 |           804/7024 |     11.45% |
| ar_SA   |       61 |          2286/7024 |     32.55% |
| be_BY   |       43 |            93/7024 |      1.32% |
| bg_BG   |       61 |          4210/7024 | 🏻  59.94% |
| ca_ES   |       61 |          1072/7024 |     15.26% |
| cs_CZ   |       61 |          4090/7024 | 🏻  58.23% |
| cy_GB   |       55 |           336/7024 |      4.78% |
| da_DK   |       61 |          3470/7024 |     49.40% |
| de_CH   |       61 |          3026/7024 |     43.08% |
| de_DE   |       64 |          6564/7024 | 🏿  93.45% |
| el_GR   |       61 |          3875/7024 | 🏻  55.17% |
| en_AU   |       23 |            29/7024 |      0.41% |
| en_GB   |       23 |            69/7024 |      0.98% |
| es_AR   |       61 |          3263/7024 |     46.46% |
| es_CL   |       60 |          1645/7024 |     23.42% |
| es_CO   |       59 |          2104/7024 |     29.95% |
| es_ES   |       61 |          3223/7024 |     45.89% |
| es_MX   |       61 |          4336/7024 | 🏼  61.73% |
| et_EE   |       61 |          1578/7024 |     22.47% |
| fa_IR   |       61 |          3119/7024 |     44.40% |
| fi_FI   |       61 |          3200/7024 |     45.56% |
| fr_CA   |       61 |          3897/7024 | 🏻  55.48% |
| fr_FR   |       61 |          6183/7024 | 🏾  88.03% |
| gl_ES   |       60 |          2828/7024 |     40.26% |
| gu_IN   |       58 |          1408/7024 |     20.05% |
| he_IL   |       61 |          3729/7024 | 🏻  53.09% |
| hi_IN   |       60 |          1266/7024 |     18.02% |
| hr_HR   |       61 |          1982/7024 |     28.22% |
| hu_HU   |       61 |          3497/7024 |     49.79% |
| id_ID   |       61 |          2954/7024 |     42.06% |
| is_IS   |       54 |           264/7024 |      3.76% |
| it_IT   |       61 |          4174/7024 | 🏻  59.42% |
| ja_JP   |       61 |          4356/7024 | 🏼  62.02% |
| ka_GE   |       41 |           421/7024 |      5.99% |
| kn_IN   |       61 |          1642/7024 |     23.38% |
| ko_KR   |       60 |          1473/7024 |     20.97% |
| lt_LT   |       61 |          2283/7024 |     32.50% |
| lv_LV   |       61 |          2100/7024 |     29.90% |
| mk_MK   |       59 |          1127/7024 |     16.04% |
| ml_IN   |       60 |           634/7024 |      9.03% |
| ms_MY   |       23 |            34/7024 |      0.48% |
| my_MM   |       32 |            17/7024 |      0.24% |
| nb_NO   |       61 |          3495/7024 |     49.76% |
| nl_BE   |       61 |          2878/7024 |     40.97% |
| nl_NL   |       61 |          4047/7024 | 🏻  57.62% |
| nn_NO   |       61 |          2008/7024 |     28.59% |
| pl_PL   |       61 |          4173/7024 | 🏻  59.41% |
| pt_BR   |       61 |          4304/7024 | 🏼  61.28% |
| pt_PT   |       61 |          2675/7024 |     38.08% |
| ro_RO   |       64 |          6477/7024 | 🏿  92.21% |
| ru_RU   |       61 |          3432/7024 |     48.86% |
| si_LK   |       60 |          2876/7024 |     40.95% |
| sk_SK   |       61 |          2531/7024 |     36.03% |
| sl_SI   |       58 |           533/7024 |      7.59% |
| sq_AL   |       46 |            98/7024 |      1.40% |
| sv_FI   |       61 |          2088/7024 |     29.73% |
| sv_SE   |       61 |          3455/7024 |     49.19% |
| sw_KE   |       15 |            19/7024 |      0.27% |
| sw_TZ   |       25 |            29/7024 |      0.41% |
| th_TH   |       61 |          2373/7024 |     33.78% |
| tr_TR   |       61 |          4394/7024 | 🏼  62.56% |
| uk_UA   |       61 |          2604/7024 |     37.07% |
| ur_PK   |       35 |            63/7024 |      0.90% |
| uz_UZ   |       60 |           524/7024 |      7.46% |
| vi_VN   |       61 |          3081/7024 |     43.86% |
| zh_CN   |       61 |          4394/7024 | 🏼  62.56% |
| zh_TW   |       61 |          2421/7024 |     34.47% |
