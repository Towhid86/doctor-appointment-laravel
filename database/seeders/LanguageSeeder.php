<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $LANGUAGE_LOCALE = [
            "" => [
                "name" => "Afrikaans (Namibia)",
                "alias" => "af_NA",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "" => [
                "name" => "Afrikaans (South Africa)",
                "alias" => "af_ZA",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "" => [
                "name" => "Afrikaans",
                "alias" => "af",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "" => [
                "name" => "Akan (Ghana)",
                "alias"  => "ak_GH",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ak" => [
                "name" => "Akan",
                "alias"  => "ak",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sq_AL" => [
                "name" => "Albanian (Albania)",
                "alias"  => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sq" => [
                "name" => "Albanian",
                "alias"  => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],

            "am_ET" => [
                "name" => "Amharic (Ethiopia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "am" => [
                "name" => "Amharic",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar_DZ" => [
                "name" => "Arabic (Algeria)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar_BH" => [
                "name" => "Arabic (Bahrain)",
                "alias" => "ISO-8859-6",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar_EG" => [
                "name" => "Arabic (Egypt)",
                "alias" => "ISO-8859-6",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar_IQ" => [
                "name" => "Arabic (Iraq)",
                "alias" => "ISO-8859-6",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar_JO" => [
                "name" => "Arabic (Jordan)",
                "alias" => "ISO-8859-6",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar_KW" => [
                "name" => "Arabic (Kuwait)",
                "alias" => "ISO-8859-6",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar_LB" => [
                "name" => "Arabic (Lebanon)",
                "alias" => "ISO-8859-6",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar_LY" => [
                "name" => "Arabic (Libya)",
                "alias" => "ISO-8859-6",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar_MA" => [
                "name" => "Arabic (Morocco)",
                "alias" => "ISO-8859-6",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar_OM" => [
                "name" => "Arabic (Oman)",
                "alias" => "ISO-8859-6",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar_QA" => [
                "name" => "Arabic (Qatar)",
                "alias" => "ISO-8859-6",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar_SA" => [
                "name" => "Arabic (Saudi Arabia)",
                "alias" => "ISO-8859-6",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar_SD" => [
                "name" => "Arabic (Sudan)",
                "alias" => "ISO-8859-6",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar_SY" => [
                "name" => "Arabic (Syria)",
                "alias" => "ISO-8859-6",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar_TN" => [
                "name" => "Arabic (Tunisia)",
                "alias" => "ISO-8859-6",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar_AE" => [
                "name" => "Arabic (United Arab Emirates)",
                "alias" => "ISO-8859-6",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar_YE" => [
                "name" => "Arabic (Yemen)",
                "alias" => "ISO-8859-6",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ar" => [
                "name" => "Arabic",
                "alias" => "ISO-8859-6",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "hy_AM" => [
                "name" => "Armenian (Armenia)",
                "alias" => "ARMSCII-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "hy" => [
                "name" => "Armenian",
                "alias" => "ARMSCII-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "as_IN" => [
                "name" => "Assamese (India)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "as" => [
                "name" => "Assamese",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "asa_TZ" => [
                "name" => "Asu (Tanzania)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "asa" => [
                "name" => "Asu",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "az_Cyrl" => [
                "name" => "Azerbaijani (Cyrillic, Azerbaijan)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "az_Cyrl_AZ" => [
                "name" => "Azerbaijani (Cyrillic, Azerbaijan)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "az_Latn" => [
                "name" => "Azerbaijani (Latin)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "az_Latn_AZ" => [
                "name" => "Azerbaijani (Latin, Azerbaijan)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "az" => [
                "name" => "Azerbaijani",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "bm_ML" => [
                "name" => "Bambara (Mali)",
                "alias" => "iso-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "bm" => [
                "name" => "Bambara",
                "alias" => "iso-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "eu_ES" => [
                "name" => "Basque (Spain)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "eu" => [
                "name" => "Basque",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "be_BY" => [
                "name" => "Belarusian (Belarus)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "be" => [
                "name" => "Belarusian",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "bem_ZM" => [
                "name" => "Bemba (Zambia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "bem" => [
                "name" => "Bemba",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "bez_TZ" => [
                "name" => "Bena (Tanzania)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "bez" => [
                "name" => "Bena",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "bn_BD" => [
                "name" => "Bengali (Bangladesh)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "bn_IN" => [
                "name" => "Bengali (India)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "bn" => [
                "name" => "Bengali",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "bs_BA" => [
                "name" => "Bosnian (Bosnia and Herzegovina)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "bs" => [
                "name" => "Bosnian",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "bg_BG" => [
                "name" => "Bulgarian (Bulgaria)",
                "alias" => "ISO-8859-2",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "bg" => [
                "name" => "Bulgarian",
                "alias" => "ISO-8859-2",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "my_MM" => [
                "name" => "Burmese (Myanmar [Burma])",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "my" => [
                "name" => "Burmese",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "yue_Hant_HK" => [
                "name" => "Cantonese (Traditional, Hong Kong SAR China)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ca_ES" => [
                "name" => "Catalan (Spain)",
                "alias" => "ISO-8859-15",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ca" => [
                "name" => "Catalan",
                "alias" => "ISO-8859-15",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "tzm_Latn" => [
                "name" => "Central Morocco Tamazight (Latin)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "tzm_Latn_MA" => [
                "name" => "Central Morocco Tamazight (Latin, Morocco)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "tzm" => [
                "name" => "Central Morocco Tamazight",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "chr_US" => [
                "name" => "Cherokee (United States)",
                "alias" => "U+13A0",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "chr" => [
                "name" => "Cherokee",
                "alias" => "U+13A0",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "cgg_UG" => [
                "name" => "Chiga (Uganda)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "cgg" => [
                "name" => "Chiga",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "zh_Hans" => [
                "name" => "Chinese (Simplified Han)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "zh_Hans_CN" => [
                "name" => "Chinese (Simplified Han, China)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "zh_Hans_HK" => [
                "name" => "Chinese (Simplified Han, Hong Kong SAR China)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "zh_Hans_MO" => [
                "name" => "Chinese (Simplified Han, Macau SAR China)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "zh_Hans_SG" => [
                "name" => "Chinese (Simplified Han, Singapore)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "zh_Hant" => [
                "name" => "Chinese (Traditional Han)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "zh_Hant_HK" => [
                "name" => "Chinese (Traditional Han, Hong Kong SAR China)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "zh_Hant_MO" => [
                "name" => "Chinese (Traditional Han, Macau SAR China)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "zh_Hant_TW" => [
                "name" => "Chinese (Traditional Han, Taiwan)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "zh" => [
                "name" => "Chinese",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kw_GB" => [
                "name" => "Cornish (United Kingdom)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kw" => [
                "name" => "Cornish",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "hr_HR" => [
                "name" => "Croatian (Croatia)",
                "alias" => "ISO-8859-2",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "hr" => [
                "name" => "Croatian",
                "alias" => "ISO-8859-2",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "cs_CZ" => [
                "name" => "Czech (Czech Republic)",
                "alias" => "ISO-8859-2",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "cs" => [
                "name" => "Czech",
                "alias" => "ISO-8859-2",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "da_DK" => [
                "name" => "Danish (Denmark)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "da" => [
                "name" => "Danish",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "nl_BE" => [
                "name" => "Dutch (Belgium)",
                "alias" => "ISO-8859-15",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "nl_NL" => [
                "name" => "Dutch (Netherlands)",
                "alias" => "ISO-8859-15",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "nl" => [
                "name" => "Dutch",
                "alias" => "ISO-8859-15",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ebu_KE" => [
                "name" => "Embu (Kenya)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ebu" => [
                "name" => "Embu",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_AS" => [
                "name" => "English (American Samoa)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_AU" => [
                "name" => "English (Australia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_BE" => [
                "name" => "English (Belgium)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_BZ" => [
                "name" => "English (Belize)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_BW" => [
                "name" => "English (Botswana)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_CA" => [
                "name" => "English (Canada)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_GU" => [
                "name" => "English (Guam)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_HK" => [
                "name" => "English (Hong Kong SAR China)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_IN" => [
                "name" => "English (India)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_IE" => [
                "name" => "English (Ireland)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_IL" => [
                "name" => "English (Israel)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_JM" => [
                "name" => "English (Jamaica)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_MT" => [
                "name" => "English (Malta)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_MH" => [
                "name" => "English (Marshall Islands)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_MU" => [
                "name" => "English (Mauritius)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_NA" => [
                "name" => "English (Namibia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_NZ" => [
                "name" => "English (New Zealand)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_MP" => [
                "name" => "English (Northern Mariana Islands)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_PK" => [
                "name" => "English (Pakistan)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_PH" => [
                "name" => "English (Philippines)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_SG" => [
                "name" => "English (Singapore)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_ZA" => [
                "name" => "English (South Africa)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_TT" => [
                "name" => "English (Trinidad and Tobago)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_UM" => [
                "name" => "English (U.S. Minor Outlying Islands)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_VI" => [
                "name" => "English (U.S. Virgin Islands)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_GB" => [
                "name" => "English (United Kingdom)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_US" => [
                "name" => "English (United States)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en_ZW" => [
                "name" => "English (Zimbabwe)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "en" => [
                "name" => "English",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "eo" => [
                "name" => "Esperanto",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "et_EE" => [
                "name" => "Estonian (Estonia)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "et" => [
                "name" => "Estonian",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ee_GH" => [
                "name" => "Ewe (Ghana)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ee_TG" => [
                "name" => "Ewe (Togo)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ee" => [
                "name" => "Ewe",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fo_FO" => [
                "name" => "Faroese (Faroe Islands)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fo" => [
                "name" => "Faroese",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fil_PH" => [
                "name" => "Filipino (Philippines)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fil" => [
                "name" => "Filipino",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fi_FI" => [
                "name" => "Finnish (Finland)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fi" => [
                "name" => "Finnish",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_BE" => [
                "name" => "French (Belgium)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_BJ" => [
                "name" => "French (Benin)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_BF" => [
                "name" => "French (Burkina Faso)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_BI" => [
                "name" => "French (Burundi)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_CM" => [
                "name" => "French (Cameroon)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_CA" => [
                "name" => "French (Canada)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_CF" => [
                "name" => "French (Central African Republic)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_TD" => [
                "name" => "French (Chad)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_KM" => [
                "name" => "French (Comoros)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_CG" => [
                "name" => "French (Congo - Brazzaville)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_CD" => [
                "name" => "French (Congo - Kinshasa)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_CI" => [
                "name" => "French (Côte d’Ivoire)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_DJ" => [
                "name" => "French (Djibouti)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_GQ" => [
                "name" => "French (Equatorial Guinea)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_FR" => [
                "name" => "French (France)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_GA" => [
                "name" => "French (Gabon)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_GP" => [
                "name" => "French (Guadeloupe)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_GN" => [
                "name" => "French (Guinea)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_LU" => [
                "name" => "French (Luxembourg)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_MG" => [
                "name" => "French (Madagascar)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_ML" => [
                "name" => "French (Mali)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_MQ" => [
                "name" => "French (Martinique)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_MC" => [
                "name" => "French (Monaco)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_NE" => [
                "name" => "French (Niger)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_RW" => [
                "name" => "French (Rwanda)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_RE" => [
                "name" => "French (Réunion)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_BL" => [
                "name" => "French (Saint Barthélemy)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_MF" => [
                "name" => "French (Saint Martin)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_SN" => [
                "name" => "French (Senegal)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_CH" => [
                "name" => "French (Switzerland)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr_TG" => [
                "name" => "French (Togo)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fr" => [
                "name" => "French",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ff_SN" => [
                "name" => "Fulah (Senegal)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ff" => [
                "name" => "Fulah",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "gl_ES" => [
                "name" => "Galician (Spain)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "gl" => [
                "name" => "Galician",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "lg_UG" => [
                "name" => "Ganda (Uganda)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "lg" => [
                "name" => "Ganda",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ka_GE" => [
                "name" => "Georgian (Georgia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ka" => [
                "name" => "Georgian",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "de_AT" => [
                "name" => "German (Austria)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "de_BE" => [
                "name" => "German (Belgium)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "de_DE" => [
                "name" => "German (Germany)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "de_LI" => [
                "name" => "German (Liechtenstein)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "de_LU" => [
                "name" => "German (Luxembourg)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "de_CH" => [
                "name" => "German (Switzerland)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "de" => [
                "name" => "German",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "el_CY" => [
                "name" => "Greek (Cyprus)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "el_GR" => [
                "name" => "Greek (Greece)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "el" => [
                "name" => "Greek",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "gu_IN" => [
                "name" => "Gujarati (India)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "gu" => [
                "name" => "Gujarati",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "guz_KE" => [
                "name" => "Gusii (Kenya)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "guz" => [
                "name" => "Gusii",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ha_Latn" => [
                "name" => "Hausa (Latin)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ha_Latn_GH" => [
                "name" => "Hausa (Latin, Ghana)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ha_Latn_NE" => [
                "name" => "Hausa (Latin, Niger)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ha_Latn_NG" => [
                "name" => "Hausa (Latin, Nigeria)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ha" => [
                "name" => "Hausa",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "haw_US" => [
                "name" => "Hawaiian (United States)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "haw" => [
                "name" => "Hawaiian",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "he_IL" => [
                "name" => "Hebrew (Israel)",
                "alias" => "ISO-8859-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "he" => [
                "name" => "Hebrew",
                "alias" => "ISO-8859-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "hi_IN" => [
                "name" => "Hindi (India)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "hi" => [
                "name" => "Hindi",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "hu_HU" => [
                "name" => "Hungarian (Hungary)",
                "alias" => "ISO-8859-2",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "hu" => [
                "name" => "Hungarian",
                "alias" => "ISO-8859-2",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "is_IS" => [
                "name" => "Icelandic (Iceland)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "is" => [
                "name" => "Icelandic",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ig_NG" => [
                "name" => "Igbo (Nigeria)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ig" => [
                "name" => "Igbo",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "id_ID" => [
                "name" => "Indonesian (Indonesia)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "id" => [
                "name" => "Indonesian",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ga_IE" => [
                "name" => "Irish (Ireland)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ga" => [
                "name" => "Irish",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "it_IT" => [
                "name" => "Italian (Italy)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "it_CH" => [
                "name" => "Italian (Switzerland)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "it" => [
                "name" => "Italian",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ja_JP" => [
                "name" => "Japanese (Japan)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ja" => [
                "name" => "Japanese",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kea_CV" => [
                "name" => "Kabuverdianu (Cape Verde)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kea" => [
                "name" => "Kabuverdianu",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kab_DZ" => [
                "name" => "Kabyle (Algeria)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kab" => [
                "name" => "Kabyle",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kl_GL" => [
                "name" => "Kalaallisut (Greenland)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kl" => [
                "name" => "Kalaallisut",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kln_KE" => [
                "name" => "Kalenjin (Kenya)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kln" => [
                "name" => "Kalenjin",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kam_KE" => [
                "name" => "Kamba (Kenya)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kam" => [
                "name" => "Kamba",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kn_IN" => [
                "name" => "Kannada (India)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kn" => [
                "name" => "Kannada",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kk_Cyrl" => [
                "name" => "Kazakh (Cyrillic)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kk_Cyrl_KZ" => [
                "name" => "Kazakh (Cyrillic, Kazakhstan)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kk" => [
                "name" => "Kazakh",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "km_KH" => [
                "name" => "Khmer (Cambodia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "km" => [
                "name" => "Khmer",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ki_KE" => [
                "name" => "Kikuyu (Kenya)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ki" => [
                "name" => "Kikuyu",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "rw_RW" => [
                "name" => "Kinyarwanda (Rwanda)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "rw" => [
                "name" => "Kinyarwanda",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kok_IN" => [
                "name" => "Konkani (India)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kok" => [
                "name" => "Konkani",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ko_KR" => [
                "name" => "Korean (South Korea)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ko" => [
                "name" => "Korean",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "khq_ML" => [
                "name" => "Koyra Chiini (Mali)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "khq" => [
                "name" => "Koyra Chiini",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ses_ML" => [
                "name" => "Koyraboro Senni (Mali)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ses" => [
                "name" => "Koyraboro Senni",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "lag_TZ" => [
                "name" => "Langi (Tanzania)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "lag" => [
                "name" => "Langi",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "lv_LV" => [
                "name" => "Latvian (Latvia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "lv" => [
                "name" => "Latvian",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "lt_LT" => [
                "name" => "Lithuanian (Lithuania)",
                "alias" => "ISO-8859-13",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "lt" => [
                "name" => "Lithuanian",
                "alias" => "ISO-8859-13",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "luo_KE" => [
                "name" => "Luo (Kenya)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "luo" => [
                "name" => "Luo",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "luy_KE" => [
                "name" => "Luyia (Kenya)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "luy" => [
                "name" => "Luyia",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "mk_MK" => [
                "name" => "Macedonian (Macedonia)",
                "alias" => "ISO-8859-5",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "mk" => [
                "name" => "Macedonian",
                "alias" => "ISO-8859-5",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "jmc_TZ" => [
                "name" => "Machame (Tanzania)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "jmc" => [
                "name" => "Machame",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kde_TZ" => [
                "name" => "Makonde (Tanzania)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "kde" => [
                "name" => "Makonde",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "mg_MG" => [
                "name" => "Malagasy (Madagascar)",
                "alias" => "ISO-8859-15",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "mg" => [
                "name" => "Malagasy",
                "alias" => "ISO-8859-15",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ms_BN" => [
                "name" => "Malay (Brunei)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ms_MY" => [
                "name" => "Malay (Malaysia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ms" => [
                "name" => "Malay",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ml_IN" => [
                "name" => "Malayalam (India)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ml" => [
                "name" => "Malayalam",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "mt_MT" => [
                "name" => "Maltese (Malta)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "mt" => [
                "name" => "Maltese",
                "alias" => "ISO-8859-3",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "gv_GB" => [
                "name" => "Manx (United Kingdom)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "gv" => [
                "name" => "Manx",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "mr_IN" => [
                "name" => "Marathi (India)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "mr" => [
                "name" => "Marathi",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "mas_KE" => [
                "name" => "Masai (Kenya)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "mas_TZ" => [
                "name" => "Masai (Tanzania)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "mas" => [
                "name" => "Masai",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "mer_KE" => [
                "name" => "Meru (Kenya)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "mer" => [
                "name" => "Meru",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "mfe_MU" => [
                "name" => "Morisyen (Mauritius)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "mfe" => [
                "name" => "Morisyen",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "naq_NA" => [
                "name" => "Nama (Namibia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "naq" => [
                "name" => "Nama",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ne_IN" => [
                "name" => "Nepali (India)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ne_NP" => [
                "name" => "Nepali (Nepal)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ne" => [
                "name" => "Nepali",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "nd_ZW" => [
                "name" => "North Ndebele (Zimbabwe)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "nd" => [
                "name" => "North Ndebele",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "nb_NO" => [
                "name" => "Norwegian Bokmål (Norway)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "nb" => [
                "name" => "Norwegian Bokmål",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "nn_NO" => [
                "name" => "Norwegian Nynorsk (Norway)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "nn" => [
                "name" => "Norwegian Nynorsk",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "nyn_UG" => [
                "name" => "Nyankole (Uganda)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "nyn" => [
                "name" => "Nyankole",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "or_IN" => [
                "name" => "Oriya (India)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "or" => [
                "name" => "Oriya",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "om_ET" => [
                "name" => "Oromo (Ethiopia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "om_KE" => [
                "name" => "Oromo (Kenya)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "om" => [
                "name" => "Oromo",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ps_AF" => [
                "name" => "Pashto (Afghanistan)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ps" => [
                "name" => "Pashto",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fa_AF" => [
                "name" => "Persian (Afghanistan)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fa_IR" => [
                "name" => "Persian (Iran)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "fa" => [
                "name" => "Persian",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "pl_PL" => [
                "name" => "Polish (Poland)",
                "alias" => "ISO-8859-2",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "pl" => [
                "name" => "Polish",
                "alias" => "ISO-8859-2",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "pt_BR" => [
                "name" => "Portuguese (Brazil)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "pt_GW" => [
                "name" => "Portuguese (Guinea-Bissau)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "pt_MZ" => [
                "name" => "Portuguese (Mozambique)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "pt_PT" => [
                "name" => "Portuguese (Portugal)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "pt" => [
                "name" => "Portuguese",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "pa_Arab" => [
                "name" => "Punjabi (Arabic)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "pa_Arab_PK" => [
                "name" => "Punjabi (Arabic, Pakistan)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "pa_Guru" => [
                "name" => "Punjabi (Gurmukhi)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "pa_Guru_IN" => [
                "name" => "Punjabi (Gurmukhi, India)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "pa" => [
                "name" => "Punjabi",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ro_MD" => [
                "name" => "Romanian (Moldova)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ro_RO" => [
                "name" => "Romanian (Romania)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ro" => [
                "name" => "Romanian",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "rm_CH" => [
                "name" => "Romansh (Switzerland)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "rm" => [
                "name" => "Romansh",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "rof_TZ" => [
                "name" => "Rombo (Tanzania)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "rof" => [
                "name" => "Rombo",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ru_MD" => [
                "name" => "Russian (Moldova)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ru_RU" => [
                "name" => "Russian (Russia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ru_UA" => [
                "name" => "Russian (Ukraine)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ru" => [
                "name" => "Russian",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "rwk_TZ" => [
                "name" => "Rwa (Tanzania)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "rwk" => [
                "name" => "Rwa",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "saq_KE" => [
                "name" => "Samburu (Kenya)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "saq" => [
                "name" => "Samburu",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sg_CF" => [
                "name" => "Sango (Central African Republic)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sg" => [
                "name" => "Sango",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "seh_MZ" => [
                "name" => "Sena (Mozambique)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "seh" => [
                "name" => "Sena",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sr_Cyrl" => [
                "name" => "Serbian (Cyrillic)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sr_Cyrl_BA" => [
                "name" => "Serbian (Cyrillic, Bosnia and Herzegovina)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sr_Cyrl_ME" => [
                "name" => "Serbian (Cyrillic, Montenegro)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sr_Cyrl_RS" => [
                "name" => "Serbian (Cyrillic, Serbia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sr_Latn" => [
                "name" => "Serbian (Latin)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sr_Latn_BA" => [
                "name" => "Serbian (Latin, Bosnia and Herzegovina)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sr_Latn_ME" => [
                "name" => "Serbian (Latin, Montenegro)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sr_Latn_RS" => [
                "name" => "Serbian (Latin, Serbia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sr" => [
                "name" => "Serbian",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sn_ZW" => [
                "name" => "Shona (Zimbabwe)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sn" => [
                "name" => "Shona",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ii_CN" => [
                "name" => "Sichuan Yi (China)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ii" => [
                "name" => "Sichuan Yi",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "si_LK" => [
                "name" => "Sinhala (Sri Lanka)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "si" => [
                "name" => "Sinhala",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sk_SK" => [
                "name" => "Slovak (Slovakia)",
                "alias" => "ISO-8859-2",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sk" => [
                "name" => "Slovak",
                "alias" => "ISO-8859-2",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sl_SI" => [
                "name" => "Slovenian (Slovenia)",
                "alias" => "ISO-8859-2",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sl" => [
                "name" => "Slovenian",
                "alias" => "ISO-8859-2",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "xog_UG" => [
                "name" => "Soga (Uganda)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "xog" => [
                "name" => "Soga",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "so_DJ" => [
                "name" => "Somali (Djibouti)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "so_ET" => [
                "name" => "Somali (Ethiopia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "so_KE" => [
                "name" => "Somali (Kenya)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "so_SO" => [
                "name" => "Somali (Somalia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "so" => [
                "name" => "Somali",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_AR" => [
                "name" => "Spanish (Argentina)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_BO" => [
                "name" => "Spanish (Bolivia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_CL" => [
                "name" => "Spanish (Chile)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_CO" => [
                "name" => "Spanish (Colombia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_CR" => [
                "name" => "Spanish (Costa Rica)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_DO" => [
                "name" => "Spanish (Dominican Republic)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_EC" => [
                "name" => "Spanish (Ecuador)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_SV" => [
                "name" => "Spanish (El Salvador)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_GQ" => [
                "name" => "Spanish (Equatorial Guinea)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_GT" => [
                "name" => "Spanish (Guatemala)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_HN" => [
                "name" => "Spanish (Honduras)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_419" => [
                "name" => "Spanish (Latin America)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_MX" => [
                "name" => "Spanish (Mexico)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_NI" => [
                "name" => "Spanish (Nicaragua)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_PA" => [
                "name" => "Spanish (Panama)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_PY" => [
                "name" => "Spanish (Paraguay)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_PE" => [
                "name" => "Spanish (Peru)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_PR" => [
                "name" => "Spanish (Puerto Rico)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_ES" => [
                "name" => "Spanish (Spain)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_US" => [
                "name" => "Spanish (United States)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_UY" => [
                "name" => "Spanish (Uruguay)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es_VE" => [
                "name" => "Spanish (Venezuela)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "es" => [
                "name" => "Spanish",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sw_KE" => [
                "name" => "Swahili (Kenya)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sw_TZ" => [
                "name" => "Swahili (Tanzania)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sw" => [
                "name" => "Swahili",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sv_FI" => [
                "name" => "Swedish (Finland)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sv_SE" => [
                "name" => "Swedish (Sweden)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "sv" => [
                "name" => "Swedish",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "gsw_CH" => [
                "name" => "Swiss German (Switzerland)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "gsw" => [
                "name" => "Swiss German",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "shi_Latn" => [
                "name" => "Tachelhit (Latin)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "shi_Latn_MA" => [
                "name" => "Tachelhit (Latin, Morocco)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "shi_Tfng" => [
                "name" => "Tachelhit (Tifinagh)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "shi_Tfng_MA" => [
                "name" => "Tachelhit (Tifinagh, Morocco)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "shi" => [
                "name" => "Tachelhit",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "dav_KE" => [
                "name" => "Taita (Kenya)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "dav" => [
                "name" => "Taita",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ta_IN" => [
                "name" => "Tamil (India)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ta_LK" => [
                "name" => "Tamil (Sri Lanka)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ta" => [
                "name" => "Tamil",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "te_IN" => [
                "name" => "Telugu (India)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "te" => [
                "name" => "Telugu",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "teo_KE" => [
                "name" => "Teso (Kenya)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "teo_UG" => [
                "name" => "Teso (Uganda)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "teo" => [
                "name" => "Teso",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "th_TH" => [
                "name" => "Thai (Thailand)",
                "alias" => "TIS-620",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "th" => [
                "name" => "Thai",
                "alias" => "TIS-620",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "bo_CN" => [
                "name" => "Tibetan (China)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "bo_IN" => [
                "name" => "Tibetan (India)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "bo" => [
                "name" => "Tibetan",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ti_ER" => [
                "name" => "Tigrinya (Eritrea)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ti_ET" => [
                "name" => "Tigrinya (Ethiopia)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ti" => [
                "name" => "Tigrinya",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "to_TO" => [
                "name" => "Tonga (Tonga)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "to" => [
                "name" => "Tonga",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "tr_TR" => [
                "name" => "Turkish (Turkey)",
                "alias" => "ISO-8859-9",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "tr" => [
                "name" => "Turkish",
                "alias" => "ISO-8859-9",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "uk_UA" => [
                "name" => "Ukrainian (Ukraine)",
                "alias" => "KOI8-U",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "uk" => [
                "name" => "Ukrainian",
                "alias" => "KOI8-U",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ur_IN" => [
                "name" => "Urdu (India)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ur_PK" => [
                "name" => "Urdu (Pakistan)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "ur" => [
                "name" => "Urdu",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "uz_Arab" => [
                "name" => "Uzbek (Arabic)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "uz_Arab_AF" => [
                "name" => "Uzbek (Arabic, Afghanistan)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "uz_Cyrl" => [
                "name" => "Uzbek (Cyrillic)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "uz_Cyrl_UZ" => [
                "name" => "Uzbek (Cyrillic, Uzbekistan)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "uz_Latn" => [
                "name" => "Uzbek (Latin)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "uz_Latn_UZ" => [
                "name" => "Uzbek (Latin, Uzbekistan)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "uz" => [
                "name" => "Uzbek",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "vi_VN" => [
                "name" => "Vietnamese (Vietnam)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "vi" => [
                "name" => "Vietnamese",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "vun_TZ" => [
                "name" => "Vunjo (Tanzania)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "vun" => [
                "name" => "Vunjo",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "cy_GB" => [
                "name" => "Welsh (United Kingdom)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "cy" => [
                "name" => "Welsh",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "yo_NG" => [
                "name" => "Yoruba (Nigeria)",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "yo" => [
                "name" => "Yoruba",
                "alias" => "UTF-8",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "zu_ZA" => [
                "name" => "Zulu (South Africa)",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ],
            "zu" => [
                "name" => "Zulu",
                "alias" => "ISO-8859-1",
                "direction" => "ltr",
                "default"=>0,
                "flag" => null
            ]
        ];
    }
}
