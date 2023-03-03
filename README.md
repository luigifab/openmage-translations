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

| Locale  | CSV used | Strings translated | Percent    |
| ------- | --------:| ------------------:| ----------:|
| ar_EG   |       50 |           833/7123 |     11.69% |
| ar_SA   |       61 |          2316/7123 |     32.51% |
| be_BY   |       43 |            93/7123 |      1.31% |
| bg_BG   |       61 |          4270/7123 | 🏻  59.95% |
| ca_ES   |       60 |           835/7123 |     11.72% |
| cs_CZ   |       61 |          4148/7123 | 🏻  58.23% |
| cy_GB   |       55 |           357/7123 |      5.01% |
| da_DK   |       61 |          3525/7123 |     49.49% |
| de_CH   |       61 |          3055/7123 |     42.89% |
| de_DE   |       64 |          6676/7123 | 🏿  93.72% |
| el_GR   |       61 |          3933/7123 | 🏻  55.22% |
| en_AU   |       23 |            29/7123 |      0.41% |
| en_GB   |       23 |            69/7123 |      0.97% |
| es_AR   |       61 |          3294/7123 |     46.24% |
| es_CL   |       60 |          1679/7123 |     23.57% |
| es_CO   |       59 |          2138/7123 |     30.02% |
| es_ES   |       61 |          3128/7123 |     43.91% |
| es_MX   |       61 |          4396/7123 | 🏼  61.72% |
| et_EE   |       61 |          1607/7123 |     22.56% |
| fa_IR   |       61 |          3148/7123 |     44.19% |
| fi_FI   |       61 |          3258/7123 |     45.74% |
| fr_CA   |       61 |          3904/7123 | 🏻  54.81% |
| fr_FR   |       61 |          6282/7123 | 🏾  88.19% |
| gl_ES   |       60 |          2864/7123 |     40.21% |
| gu_IN   |       58 |          1433/7123 |     20.12% |
| he_IL   |       61 |          3789/7123 | 🏻  53.19% |
| hi_IN   |       60 |          1280/7123 |     17.97% |
| hr_HR   |       61 |          2017/7123 |     28.32% |
| hu_HU   |       61 |          3552/7123 |     49.87% |
| id_ID   |       61 |          2980/7123 |     41.84% |
| is_IS   |       54 |           265/7123 |      3.72% |
| it_IT   |       61 |          4234/7123 | 🏻  59.44% |
| ja_JP   |       61 |          4416/7123 | 🏼  62.00% |
| ka_GE   |       41 |           427/7123 |      5.99% |
| kn_IN   |       61 |          1659/7123 |     23.29% |
| ko_KR   |       60 |          1496/7123 |     21.00% |
| lt_LT   |       61 |          2311/7123 |     32.44% |
| lv_LV   |       61 |          2151/7123 |     30.20% |
| mk_MK   |       59 |          1157/7123 |     16.24% |
| ml_IN   |       60 |           640/7123 |      8.98% |
| ms_MY   |       23 |            35/7123 |      0.49% |
| my_MM   |       32 |            17/7123 |      0.24% |
| nb_NO   |       61 |          3553/7123 |     49.88% |
| nl_BE   |       61 |          2906/7123 |     40.80% |
| nl_NL   |       61 |          4107/7123 | 🏻  57.66% |
| nn_NO   |       61 |          2032/7123 |     28.53% |
| pl_PL   |       61 |          4233/7123 | 🏻  59.43% |
| pt_BR   |       61 |          4363/7123 | 🏼  61.25% |
| pt_PT   |       61 |          2705/7123 |     37.98% |
| ro_RO   |       64 |          6588/7123 | 🏿  92.49% |
| ru_RU   |       61 |          3418/7123 |     47.99% |
| si_LK   |       60 |          2906/7123 |     40.80% |
| sk_SK   |       61 |          2583/7123 |     36.26% |
| sl_SI   |       58 |           557/7123 |      7.82% |
| sq_AL   |       46 |            99/7123 |      1.39% |
| sv_FI   |       61 |          2106/7123 |     29.57% |
| sv_SE   |       61 |          3506/7123 |     49.22% |
| sw_KE   |       15 |            19/7123 |      0.27% |
| sw_TZ   |       25 |            29/7123 |      0.41% |
| th_TH   |       61 |          2420/7123 |     33.97% |
| tr_TR   |       61 |          4454/7123 | 🏼  62.53% |
| uk_UA   |       61 |          2614/7123 |     36.70% |
| ur_PK   |       35 |            63/7123 |      0.88% |
| uz_UZ   |       60 |           538/7123 |      7.55% |
| vi_VN   |       61 |          3109/7123 |     43.65% |
| zh_CN   |       61 |          4454/7123 | 🏼  62.53% |
| zh_TW   |       61 |          2471/7123 |     34.69% |
