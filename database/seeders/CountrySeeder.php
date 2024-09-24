<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        if (DB::table('countries')->count() > 0) {
            return;
        }
        $countries = [
            [
                'name'=>'AFGHANISTAN','nick_name'=> 'Afghanistan','alpha2_code'=>'AF','alpha3_code'=>'AFG','num_code'=>4,'phone_code'=>'93','flag'=>'afghanistan.png'
            ],
            [
                'name'=>'ALAND ISLANDS','nick_name'=> 'Aland Islands','alpha2_code'=>'AX','alpha3_code'=>'ALA','num_code'=>248,'phone_code'=>'358','flag'=>'aland_islands.png'
            ],
            [
                'name'=>'ALBANIA','nick_name'=> 'Albania','alpha2_code'=>'AL','alpha3_code'=>'ALB','num_code'=>8,'phone_code'=>'355','flag'=>'albania.png'
            ],
            [
                'name'=>'ALGERIA', 'nick_name'=>'Algeria', 'alpha2_code'=>'DZ', 'alpha3_code'=>'DZA', 'num_code'=>12, 'phone_code'=>'213', 'flag'=>'algeria.png'
            ],
            [
                'name'=>'AMERICAN SAMOA', 'nick_name'=>'American Samoa', 'alpha2_code'=>'AS', 'alpha3_code'=>'ASM', 'num_code'=>16, 'phone_code'=>'1684', 'flag'=>'american_samoa.png'
            ],
            [
                'name'=>'ANDORRA', 'nick_name'=>'Andorra', 'alpha2_code'=>'AD', 'alpha3_code'=>'AND', 'num_code'=>20, 'phone_code'=>'376', 'flag'=>'andorra.png'
            ],
            [
                'name'=>'ANGOLA', 'nick_name'=>'Angola', 'alpha2_code'=>'AO', 'alpha3_code'=>'AGO', 'num_code'=>24, 'phone_code'=>'244', 'flag'=>'angola.png'
            ],
            [
                'name'=>'ANGUILLA', 'nick_name'=>'Anguilla', 'alpha2_code'=>'AI', 'alpha3_code'=>'AIA', 'num_code'=>660, 'phone_code'=>'1264', 'flag'=>'anguilla.png'
            ],
            [
                'name'=>'ANTARCTICA', 'nick_name'=>'Antarctica', 'alpha2_code'=>'AQ', 'alpha3_code'=>'', 'num_code'=>0, 'phone_code'=>'0', 'flag'=>'antarctica.png'
            ],
            [
                'name'=>'ANTIGUA AND BARBUDA', 'nick_name'=>'Antigua and Barbuda', 'alpha2_code'=>'AG', 'alpha3_code'=>'ATG', 'num_code'=>28, 'phone_code'=>'1268', 'flag'=>'antigua_and_barbuda.png'
            ],
            [
                'name'=>'ARGENTINA', 'nick_name'=>'Argentina', 'alpha2_code'=>'AR', 'alpha3_code'=>'ARG', 'num_code'=>32, 'phone_code'=>'54', 'flag'=>'argentina.png'
            ],
            [
                'name'=>'ARMENIA', 'nick_name'=>'Armenia', 'alpha2_code'=>'AM', 'alpha3_code'=>'ARM', 'num_code'=>51, 'phone_code'=>'374', 'flag'=>'armenia.png'
            ],
            [
                'name'=>'ARUBA', 'nick_name'=>'Aruba', 'alpha2_code'=>'AW', 'alpha3_code'=>'ABW', 'num_code'=>533, 'phone_code'=>'297', 'flag'=>'aruba.png'
            ],
            [
                'name'=>'ASIA PACIFIC REGION', 'nick_name'=>'Asia / Pacific Region', 'alpha2_code'=>'AP', 'alpha3_code'=>'0', 'num_code'=>0, 'phone_code'=>'0', 'flag'=>'asia_pacific_region.png'
            ],
            [
                'name'=>'AUSTRALIA', 'nick_name'=>'Australia', 'alpha2_code'=>'AU', 'alpha3_code'=>'AUS', 'num_code'=>36, 'phone_code'=>'61', 'flag'=>'australia.png'
            ],
            [
                'name'=>'AUSTRIA', 'nick_name'=>'Austria', 'alpha2_code'=>'AT', 'alpha3_code'=>'AUT', 'num_code'=>40, 'phone_code'=>'43', 'flag'=>'austria.png'
            ],
            [
                'name'=>'AZERBAIJAN', 'nick_name'=>'Azerbaijan', 'alpha2_code'=>'AZ', 'alpha3_code'=>'AZE', 'num_code'=>31, 'phone_code'=>'994', 'flag'=>'azerbaijan.png'
            ],
            [
                'name'=>'BAHAMAS', 'nick_name'=>'Bahamas', 'alpha2_code'=>'BS', 'alpha3_code'=>'BHS', 'num_code'=>44, 'phone_code'=>'1242', 'flag'=>'bahamas.png'
            ],
            [
                'name'=>'BAHRAIN', 'nick_name'=>'Bahrain', 'alpha2_code'=>'BH', 'alpha3_code'=>'BHR', 'num_code'=>48, 'phone_code'=>'973', 'flag'=>'bahrain.png'
            ],
            [
                'name'=>'BANGLADESH', 'nick_name'=>'Bangladesh', 'alpha2_code'=>'BD', 'alpha3_code'=>'BGD', 'num_code'=>50, 'phone_code'=>'880', 'flag'=>'bangladesh.png'
            ],
            [
                'name'=>'BARBADOS', 'nick_name'=>'Barbados', 'alpha2_code'=>'BB', 'alpha3_code'=>'BRB', 'num_code'=>52, 'phone_code'=>'1246', 'flag'=>'barbados.png'
            ],
            [
                'name'=>'BELARUS', 'nick_name'=>'Belarus', 'alpha2_code'=>'BY', 'alpha3_code'=>'BLR', 'num_code'=>112, 'phone_code'=>'375', 'flag'=>'belarus.png'
            ],
            [
                'name'=>'BELGIUM', 'nick_name'=>'Belgium', 'alpha2_code'=>'BE', 'alpha3_code'=>'BEL', 'num_code'=>56, 'phone_code'=>'32', 'flag'=>'belgium.png'
            ],
            [
                'name'=>'BELIZE', 'nick_name'=>'Belize', 'alpha2_code'=>'BZ', 'alpha3_code'=>'BLZ', 'num_code'=>84, 'phone_code'=>'501', 'flag'=>'belize.png'
            ],
            [
                'name'=>'BENIN', 'nick_name'=>'Benin', 'alpha2_code'=>'BJ', 'alpha3_code'=>'BEN', 'num_code'=>204, 'phone_code'=>'229', 'flag'=>'benin.png'
            ],
            [
                'name'=>'BERMUDA', 'nick_name'=>'Bermuda', 'alpha2_code'=>'BM', 'alpha3_code'=>'BMU', 'num_code'=>60, 'phone_code'=>'1441', 'flag'=>'bermuda.png'
            ],
            [
                'name'=>'BHUTAN', 'nick_name'=>'Bhutan', 'alpha2_code'=>'BT', 'alpha3_code'=>'BTN', 'num_code'=>64, 'phone_code'=>'975', 'flag'=>'bhutan.png'
            ],
            [
                'name'=>'BOLIVIA', 'nick_name'=>'Bolivia', 'alpha2_code'=>'BO', 'alpha3_code'=>'BOL', 'num_code'=>68, 'phone_code'=>'591', 'flag'=>'bolivia.png'
            ],
            [
                'name'=>'BONAIRE, SINT EUSTATIUS AND SABA', 'nick_name'=>'Bonaire, Sint Eustatius and Saba', 'alpha2_code'=>'BQ', 'alpha3_code'=>'BES', 'num_code'=>535, 'phone_code'=>'599', 'flag'=>'bonaire_sint_eustatius_and_saba.png'
            ],
            [
                'name'=>'BOSNIA AND HERZEGOVINA', 'nick_name'=>'Bosnia and Herzegovina', 'alpha2_code'=>'BA', 'alpha3_code'=>'BIH', 'num_code'=>70, 'phone_code'=>'387', 'flag'=>'bosnia_and_herzegovina.png'
            ],
            [
                'name'=>'BOTSWANA', 'nick_name'=>'Botswana', 'alpha2_code'=>'BW', 'alpha3_code'=>'BWA', 'num_code'=>72, 'phone_code'=>'267', 'flag'=>'botswana.png'
            ],
            [
                'name'=>'BOUVET ISLAND', 'nick_name'=>'Bouvet Island', 'alpha2_code'=>'BV', 'alpha3_code'=>'', 'num_code'=>0, 'phone_code'=>'0', 'flag'=>'bouvet_island.png'
            ],
            [
                'name'=>'BRAZIL', 'nick_name'=>'Brazil', 'alpha2_code'=>'BR', 'alpha3_code'=>'BRA', 'num_code'=>76, 'phone_code'=>'55', 'flag'=>'brazil.png'
            ],
            [
                'name'=>'BRITISH INDIAN OCEAN TERRITORY', 'nick_name'=>'British Indian Ocean Territory', 'alpha2_code'=>'IO', 'alpha3_code'=>'', 'num_code'=>0, 'phone_code'=>'246', 'flag'=>'british_indian_ocean_territory.png'
            ],
            [
                'name'=>'BRUNEI DARUSSALAM', 'nick_name'=>'Brunei Darussalam', 'alpha2_code'=>'BN', 'alpha3_code'=>'BRN', 'num_code'=>96, 'phone_code'=>'673', 'flag'=>'brunei_darussalam.png'
            ],
            [
                'name'=>'BULGARIA', 'nick_name'=>'Bulgaria', 'alpha2_code'=>'BG', 'alpha3_code'=>'BGR', 'num_code'=>100, 'phone_code'=>'359', 'flag'=>'bulgaria.png'
            ],
            [
                'name'=>'BURKINA FASO', 'nick_name'=>'Burkina Faso', 'alpha2_code'=>'BF', 'alpha3_code'=>'BFA', 'num_code'=>854, 'phone_code'=>'226', 'flag'=>'burkina_faso.png'
            ],
            [
                'name'=>'BURUNDI', 'nick_name'=>'Burundi', 'alpha2_code'=>'BI', 'alpha3_code'=>'BDI', 'num_code'=>108, 'phone_code'=>'257', 'flag'=>'burundi.png'
            ],
            [
                'name'=>'CAMBODIA', 'nick_name'=>'Cambodia', 'alpha2_code'=>'KH', 'alpha3_code'=>'KHM', 'num_code'=>116, 'phone_code'=>'855', 'flag'=>'cambodia.png'
            ],
            [
                'name'=>'CAMEROON', 'nick_name'=>'Cameroon', 'alpha2_code'=>'CM', 'alpha3_code'=>'CMR', 'num_code'=>120, 'phone_code'=>'237', 'flag'=>'cameroon.png'
            ],
            [
                'name'=>'CANADA', 'nick_name'=>'Canada', 'alpha2_code'=>'CA', 'alpha3_code'=>'CAN', 'num_code'=>124, 'phone_code'=>'1', 'flag'=>'canada.png'
            ],
            [
                'name'=>'CAPE VERDE', 'nick_name'=>'Cape Verde', 'alpha2_code'=>'CV', 'alpha3_code'=>'CPV', 'num_code'=>132, 'phone_code'=>'238', 'flag'=>'cape_verde.png'
            ],
            [
                'name'=>'CAYMAN ISLANDS', 'nick_name'=>'Cayman Islands', 'alpha2_code'=>'KY', 'alpha3_code'=>'CYM', 'num_code'=>136, 'phone_code'=>'1345', 'flag'=>'cayman_islands.png'
            ],
            [
                'name'=>'CENTRAL AFRICAN REPUBLIC', 'nick_name'=>'Central African Republic', 'alpha2_code'=>'CF', 'alpha3_code'=>'CAF', 'num_code'=>140, 'phone_code'=>'236', 'flag'=>'central_african_republic.png'
            ],
            [
                'name'=>'CHAD', 'nick_name'=>'Chad', 'alpha2_code'=>'TD', 'alpha3_code'=>'TCD', 'num_code'=>148, 'phone_code'=>'235', 'flag'=>'chad.png'
            ],
            [
                'name'=>'CHILE', 'nick_name'=>'Chile', 'alpha2_code'=>'CL', 'alpha3_code'=>'CHL', 'num_code'=>152, 'phone_code'=>'56', 'flag'=>'chile.png'
            ],
            [
                'name'=>'CHINA', 'nick_name'=>'China', 'alpha2_code'=>'CN', 'alpha3_code'=>'CHN', 'num_code'=>156, 'phone_code'=>'86', 'flag'=>'china.png'
            ],
            [
                'name'=>'CHRISTMAS ISLAND', 'nick_name'=>'Christmas Island', 'alpha2_code'=>'CX', 'alpha3_code'=>'', 'num_code'=>0, 'phone_code'=>'61', 'flag'=>'christmas_island.png'
            ],
            [
                'name'=>'COCOS (KEELING) ISLANDS', 'nick_name'=>'Cocos (Keeling) Islands', 'alpha2_code'=>'CC', 'alpha3_code'=>'', 'num_code'=>0, 'phone_code'=>'672', 'flag'=>'cocos_keeling_islands.png'
            ],
            [
                'name'=>'COLOMBIA', 'nick_name'=>'Colombia', 'alpha2_code'=>'CO', 'alpha3_code'=>'COL', 'num_code'=>170, 'phone_code'=>'57', 'flag'=>'colombia.png'
            ],
            [
                'name'=>'COMOROS', 'nick_name'=>'Comoros', 'alpha2_code'=>'KM', 'alpha3_code'=>'COM', 'num_code'=>174, 'phone_code'=>'269', 'flag'=>'comoros.png'
            ],
            [
                'name'=>'CONGO', 'nick_name'=>'Congo', 'alpha2_code'=>'CG', 'alpha3_code'=>'COG', 'num_code'=>178, 'phone_code'=>'242', 'flag'=>'congo.png'
            ],
            [
                'name'=>'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'nick_name'=>'Congo, the Democratic Republic of the', 'alpha2_code'=>'CD', 'alpha3_code'=>'COD', 'num_code'=>180, 'phone_code'=>'242', 'flag'=>'congo_the_democratic_republic_of_the.png'
            ],
            [
                'name'=>'LIECHTENSTEIN', 'nick_name'=>'Liechtenstein', 'alpha2_code'=>'LI', 'alpha3_code'=>'LIE', 'num_code'=>438, 'phone_code'=>'423', 'flag'=>'liechtenstein.png'
            ],
            [
                'name'=>'LITHUANIA', 'nick_name'=>'Lithuania', 'alpha2_code'=>'LT', 'alpha3_code'=>'LTU', 'num_code'=>440, 'phone_code'=>'370', 'flag'=>'lithuania.png'
            ],
            [
                'name'=>'LUXEMBOURG', 'nick_name'=>'Luxembourg', 'alpha2_code'=>'LU', 'alpha3_code'=>'LUX', 'num_code'=>442, 'phone_code'=>'352', 'flag'=>'luxembourg.png'
            ],
            [
                'name'=>'MACAO', 'nick_name'=>'Macao', 'alpha2_code'=>'MO', 'alpha3_code'=>'MAC', 'num_code'=>446, 'phone_code'=>'853', 'flag'=>'macao.png'
            ],
            [
                'name'=>'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'nick_name'=>'Macedonia, the Former Yugoslav Republic of', 'alpha2_code'=>'MK', 'alpha3_code'=>'MKD', 'num_code'=>807, 'phone_code'=>'389', 'flag'=>'macedonia_the_former_yugoslav_republic_of.png'
            ],
            [
                'name'=>'MADAGASCAR', 'nick_name'=>'Madagascar', 'alpha2_code'=>'MG', 'alpha3_code'=>'MDG', 'num_code'=>450, 'phone_code'=>'261', 'flag'=>'madagascar.png'
            ],
            [
                'name'=>'MALAWI', 'nick_name'=>'Malawi', 'alpha2_code'=>'MW', 'alpha3_code'=>'MWI', 'num_code'=>454, 'phone_code'=>'265', 'flag'=>'malawi.png'
            ],
            [
                'name'=>'MALAYSIA', 'nick_name'=>'Malaysia', 'alpha2_code'=>'MY', 'alpha3_code'=>'MYS', 'num_code'=>458, 'phone_code'=>'60', 'flag'=>'malaysia.png'
            ],
            [
                'name'=>'MALDIVES', 'nick_name'=>'Maldives', 'alpha2_code'=>'MV', 'alpha3_code'=>'MDV', 'num_code'=>462, 'phone_code'=>'960', 'flag'=>'maldives.png'
            ],
            [
                'name'=>'MALI', 'nick_name'=>'Mali', 'alpha2_code'=>'ML', 'alpha3_code'=>'MLI', 'num_code'=>466, 'phone_code'=>'223', 'flag'=>'mali.png'
            ],
            [
                'name'=>'MALTA', 'nick_name'=>'Malta', 'alpha2_code'=>'MT', 'alpha3_code'=>'MLT', 'num_code'=>470, 'phone_code'=>'356', 'flag'=>'malta.png'
            ],
            [
                'name'=>'MARSHALL ISLANDS', 'nick_name'=>'Marshall Islands', 'alpha2_code'=>'MH', 'alpha3_code'=>'MHL', 'num_code'=>584, 'phone_code'=>'692', 'flag'=>'marshall_islands.png'
            ],
            [
                'name'=>'MARTINIQUE', 'nick_name'=>'Martinique', 'alpha2_code'=>'MQ', 'alpha3_code'=>'MTQ', 'num_code'=>474, 'phone_code'=>'596', 'flag'=>'martinique.png'
            ],
            [
                'name'=>'MAURITANIA', 'nick_name'=>'Mauritania', 'alpha2_code'=>'MR', 'alpha3_code'=>'MRT', 'num_code'=>478, 'phone_code'=>'222', 'flag'=>'mauritania.png'
            ],
            [
                'name'=>'MAURITIUS', 'nick_name'=>'Mauritius', 'alpha2_code'=>'MU', 'alpha3_code'=>'MUS', 'num_code'=>480, 'phone_code'=>'230', 'flag'=>'mauritius.png'
            ],
            [
                'name'=>'MAYOTTE', 'nick_name'=>'Mayotte', 'alpha2_code'=>'YT', 'alpha3_code'=>'', 'num_code'=>0, 'phone_code'=>'269', 'flag'=>'mayotte.png'
            ],
            [
                'name'=>'MEXICO', 'nick_name'=>'Mexico', 'alpha2_code'=>'MX', 'alpha3_code'=>'MEX', 'num_code'=>484, 'phone_code'=>'52', 'flag'=>'mexico.png'
            ],
            [
                'name'=>'MICRONESIA, FEDERATED STATES OF', 'nick_name'=>'Micronesia, Federated States of', 'alpha2_code'=>'FM', 'alpha3_code'=>'FSM', 'num_code'=>583, 'phone_code'=>'691', 'flag'=>'micronesia_federated_states_of.png'
            ],
            [
                'name'=>'MOLDOVA, REPUBLIC OF', 'nick_name'=>'Moldova, Republic of', 'alpha2_code'=>'MD', 'alpha3_code'=>'MDA', 'num_code'=>498, 'phone_code'=>'373', 'flag'=>'moldova_republic_of.png'
            ],
            [
                'name'=>'MONACO', 'nick_name'=>'Monaco', 'alpha2_code'=>'MC', 'alpha3_code'=>'MCO', 'num_code'=>492, 'phone_code'=>'377', 'flag'=>'monaco.png'
            ],
            [
                'name'=>'MONGOLIA', 'nick_name'=>'Mongolia', 'alpha2_code'=>'MN', 'alpha3_code'=>'MNG', 'num_code'=>496, 'phone_code'=>'976', 'flag'=>'mongolia.png'
            ],
            [
                'name'=>'MONTENEGRO', 'nick_name'=>'Montenegro', 'alpha2_code'=>'ME', 'alpha3_code'=>'MNE', 'num_code'=>499, 'phone_code'=>'382', 'flag'=>'montenegro.png'
            ],
            [
                'name'=>'MONTSERRAT', 'nick_name'=>'Montserrat', 'alpha2_code'=>'MS', 'alpha3_code'=>'MSR', 'num_code'=>500, 'phone_code'=>'1664', 'flag'=>'montserrat.png'
            ],
            [
                'name'=>'MOROCCO', 'nick_name'=>'Morocco', 'alpha2_code'=>'MA', 'alpha3_code'=>'MAR', 'num_code'=>504, 'phone_code'=>'212', 'flag'=>'morocco.png'
            ],
            [
                'name'=>'MOZAMBIQUE', 'nick_name'=>'Mozambique', 'alpha2_code'=>'MZ', 'alpha3_code'=>'MOZ', 'num_code'=>508, 'phone_code'=>'258', 'flag'=>'mozambique.png'
            ],
            [
                'name'=>'MYANMAR', 'nick_name'=>'Myanmar', 'alpha2_code'=>'MM', 'alpha3_code'=>'MMR', 'num_code'=>104, 'phone_code'=>'95', 'flag'=>'myanmar.png'
            ],
            [
                'name'=>'NAMIBIA', 'nick_name'=>'Namibia', 'alpha2_code'=>'NA', 'alpha3_code'=>'NAM', 'num_code'=>516, 'phone_code'=>'264', 'flag'=>'namibia.png'
            ],
            [
                'name'=>'NAURU', 'nick_name'=>'Nauru', 'alpha2_code'=>'NR', 'alpha3_code'=>'NRU', 'num_code'=>520, 'phone_code'=>'674', 'flag'=>'nauru.png'
            ],
            [
                'name'=>'NEPAL', 'nick_name'=>'Nepal', 'alpha2_code'=>'NP', 'alpha3_code'=>'NPL', 'num_code'=>524, 'phone_code'=>'977', 'flag'=>'nepal.png'
            ],
            [
                'name'=>'NETHERLANDS', 'nick_name'=>'Netherlands', 'alpha2_code'=>'NL', 'alpha3_code'=>'NLD', 'num_code'=>528, 'phone_code'=>'31', 'flag'=>'netherlands.png'
            ],
            [
                'name'=>'NETHERLANDS ANTILLES', 'nick_name'=>'Netherlands Antilles', 'alpha2_code'=>'AN', 'alpha3_code'=>'ANT', 'num_code'=>530, 'phone_code'=>'599', 'flag'=>'netherlands_antilles.png'
            ],
            [
                'name'=>'NEW CALEDONIA', 'nick_name'=>'New Caledonia', 'alpha2_code'=>'NC', 'alpha3_code'=>'NCL', 'num_code'=>540, 'phone_code'=>'687', 'flag'=>'new_caledonia.png'
            ],
            [
                'name'=>'NEW ZEALAND', 'nick_name'=>'New Zealand', 'alpha2_code'=>'NZ', 'alpha3_code'=>'NZL', 'num_code'=>554, 'phone_code'=>'64', 'flag'=>'new_zealand.png'
            ],
            [
                'name'=>'NICARAGUA', 'nick_name'=>'Nicaragua', 'alpha2_code'=>'NI', 'alpha3_code'=>'NIC', 'num_code'=>558, 'phone_code'=>'505', 'flag'=>'nicaragua.png'
            ],
            [
                'name'=>'NIGER', 'nick_name'=>'Niger', 'alpha2_code'=>'NE', 'alpha3_code'=>'NER', 'num_code'=>562, 'phone_code'=>'227', 'flag'=>'niger.png'
            ],
            [
                'name'=>'NIGERIA', 'nick_name'=>'Nigeria', 'alpha2_code'=>'NG', 'alpha3_code'=>'NGA', 'num_code'=>566, 'phone_code'=>'234', 'flag'=>'nigeria.png'
            ],
            [
                'name'=>'NIUE', 'nick_name'=>'Niue', 'alpha2_code'=>'NU', 'alpha3_code'=>'NIU', 'num_code'=>570, 'phone_code'=>'683', 'flag'=>'niue.png'
            ],
            [
                'name'=>'NORFOLK ISLAND', 'nick_name'=>'Norfolk Island', 'alpha2_code'=>'NF', 'alpha3_code'=>'NFK', 'num_code'=>574, 'phone_code'=>'672', 'flag'=>'norfolk_island.png'
            ],
            [
                'name'=>'NORTHERN MARIANA ISLANDS', 'nick_name'=>'Northern Mariana Islands', 'alpha2_code'=>'MP', 'alpha3_code'=>'MNP', 'num_code'=>580, 'phone_code'=>'1670', 'flag'=>'northern_mariana_islands.png'
            ],
            [
                'name'=>'NORWAY', 'nick_name'=>'Norway', 'alpha2_code'=>'NO', 'alpha3_code'=>'NOR', 'num_code'=>578, 'phone_code'=>'47', 'flag'=>'norway.png'
            ],
            [
                'name'=>'OMAN', 'nick_name'=>'Oman', 'alpha2_code'=>'OM', 'alpha3_code'=>'OMN', 'num_code'=>512, 'phone_code'=>'968', 'flag'=>'oman.png'
            ],
            [
                'name'=>'PAKISTAN', 'nick_name'=>'Pakistan', 'alpha2_code'=>'PK', 'alpha3_code'=>'PAK', 'num_code'=>586, 'phone_code'=>'92', 'flag'=>'pakistan.png'
            ],
            [
                'name'=>'PALAU', 'nick_name'=>'Palau', 'alpha2_code'=>'PW', 'alpha3_code'=>'PLW', 'num_code'=>585, 'phone_code'=>'680', 'flag'=>'palau.png'
            ],
            [
                'name'=>'PALESTINIAN TERRITORY, OCCUPIED', 'nick_name'=>'Palestinian Territory, Occupied', 'alpha2_code'=>'PS', 'alpha3_code'=>'', 'num_code'=>0, 'phone_code'=>'970', 'flag'=>'palestinian_territory_occupied.png'
            ],
            [
                'name'=>'PANAMA', 'nick_name'=>'Panama', 'alpha2_code'=>'PA', 'alpha3_code'=>'PAN', 'num_code'=>591, 'phone_code'=>'507', 'flag'=>'panama.png'
            ],
            [
                'name'=>'PAPUA NEW GUINEA', 'nick_name'=>'Papua New Guinea', 'alpha2_code'=>'PG', 'alpha3_code'=>'PNG', 'num_code'=>598, 'phone_code'=>'675', 'flag'=>'papua_new_guinea.png'
            ],
            [
                'name'=>'PARAGUAY', 'nick_name'=>'Paraguay', 'alpha2_code'=>'PY', 'alpha3_code'=>'PRY', 'num_code'=>600, 'phone_code'=>'595', 'flag'=>'paraguay.png'
            ],
            [
                'name'=>'PERU', 'nick_name'=>'Peru', 'alpha2_code'=>'PE', 'alpha3_code'=>'PER', 'num_code'=>604, 'phone_code'=>'51', 'flag'=>'peru.png'
            ],
            [
                'name'=>'PHILIPPINES', 'nick_name'=>'Philippines', 'alpha2_code'=>'PH', 'alpha3_code'=>'PHL', 'num_code'=>608, 'phone_code'=>'63', 'flag'=>'philippines.png'
            ],
            [
                'name'=>'PITCAIRN', 'nick_name'=>'Pitcairn', 'alpha2_code'=>'PN', 'alpha3_code'=>'PCN', 'num_code'=>612, 'phone_code'=>'0', 'flag'=>'pitcairn.png'
            ],
            [
                'name'=>'POLAND', 'nick_name'=>'Poland', 'alpha2_code'=>'PL', 'alpha3_code'=>'POL', 'num_code'=>616, 'phone_code'=>'48', 'flag'=>'poland.png'
            ],
            [
                'name'=>'PORTUGAL', 'nick_name'=>'Portugal', 'alpha2_code'=>'PT', 'alpha3_code'=>'PRT', 'num_code'=>620, 'phone_code'=>'351', 'flag'=>'portugal.png'
            ],
            [
                'name'=>'PUERTO RICO', 'nick_name'=>'Puerto Rico', 'alpha2_code'=>'PR', 'alpha3_code'=>'PRI', 'num_code'=>630, 'phone_code'=>'1787', 'flag'=>'puerto_rico.png'
            ],
            [
                'name'=>'QATAR', 'nick_name'=>'Qatar', 'alpha2_code'=>'QA', 'alpha3_code'=>'QAT', 'num_code'=>634, 'phone_code'=>'974', 'flag'=>'qatar.png'
            ],
            [
                'name'=>'REUNION', 'nick_name'=>'Reunion', 'alpha2_code'=>'RE', 'alpha3_code'=>'REU', 'num_code'=>638, 'phone_code'=>'262', 'flag'=>'reunion.png'
            ],
            [
                'name'=>'ROMANIA', 'nick_name'=>'Romania', 'alpha2_code'=>'RO', 'alpha3_code'=>'ROM', 'num_code'=>642, 'phone_code'=>'40', 'flag'=>'romania.png'
            ],
            [
                'name'=>'RUSSIAN FEDERATION', 'nick_name'=>'Russian Federation', 'alpha2_code'=>'RU', 'alpha3_code'=>'RUS', 'num_code'=>643, 'phone_code'=>'70', 'flag'=>'russian_federation.png'
            ],
            [
                'name'=>'RWANDA', 'nick_name'=>'Rwanda', 'alpha2_code'=>'RW', 'alpha3_code'=>'RWA', 'num_code'=>646, 'phone_code'=>'250', 'flag'=>'rwanda.png'
            ],
            [
                'name'=>'SAINT BARTHELEMY', 'nick_name'=>'Saint Barthelemy', 'alpha2_code'=>'BL', 'alpha3_code'=>'BLM', 'num_code'=>652, 'phone_code'=>'590', 'flag'=>'saint_barthelemy.png'
            ],
            [
                'name'=>'SAINT HELENA', 'nick_name'=>'Saint Helena', 'alpha2_code'=>'SH', 'alpha3_code'=>'SHN', 'num_code'=>654, 'phone_code'=>'290', 'flag'=>'saint_helena.png'
            ],
            [
                'name'=>'SAINT KITTS AND NEVIS', 'nick_name'=>'Saint Kitts and Nevis', 'alpha2_code'=>'KN', 'alpha3_code'=>'KNA', 'num_code'=>659, 'phone_code'=>'1869', 'flag'=>'saint_kitts_and_nevis.png'
            ],
            [
                'name'=>'SAINT LUCIA', 'nick_name'=>'Saint Lucia', 'alpha2_code'=>'LC', 'alpha3_code'=>'LCA', 'num_code'=>662, 'phone_code'=>'1758', 'flag'=>'saint_lucia.png'
            ],
            [
                'name'=>'SAINT MARTIN', 'nick_name'=>'Saint Martin', 'alpha2_code'=>'MF', 'alpha3_code'=>'MAF', 'num_code'=>663, 'phone_code'=>'590', 'flag'=>'saint_martin.png'
            ],
            [
                'name'=>'SAINT PIERRE AND MIQUELON', 'nick_name'=>'Saint Pierre and Miquelon', 'alpha2_code'=>'PM', 'alpha3_code'=>'SPM', 'num_code'=>666, 'phone_code'=>'508', 'flag'=>'saint_pierre_and_miquelon.png'
            ],
            [
                'name'=>'SAINT VINCENT AND THE GRENADINES', 'nick_name'=>'Saint Vincent and the Grenadines', 'alpha2_code'=>'VC', 'alpha3_code'=>'VCT', 'num_code'=>670, 'phone_code'=>'1784', 'flag'=>'saint_vincent_and_the_grenadines.png'
            ],
            [
                'name'=>'SAMOA', 'nick_name'=>'Samoa', 'alpha2_code'=>'WS', 'alpha3_code'=>'WSM', 'num_code'=>882, 'phone_code'=>'684', 'flag'=>'samoa.png'
            ],
            [
                'name'=>'SAN MARINO', 'nick_name'=>'San Marino', 'alpha2_code'=>'SM', 'alpha3_code'=>'SMR', 'num_code'=>674, 'phone_code'=>'378', 'flag'=>'san_marino.png'
            ],
            [
                'name'=>'SAO TOME AND PRINCIPE', 'nick_name'=>'Sao Tome and Principe', 'alpha2_code'=>'ST', 'alpha3_code'=>'STP', 'num_code'=>678, 'phone_code'=>'239', 'flag'=>'sao_tome_and_principe.png'
            ],
            [
                'name'=>'SAUDI ARABIA', 'nick_name'=>'Saudi Arabia', 'alpha2_code'=>'SA', 'alpha3_code'=>'SAU', 'num_code'=>682, 'phone_code'=>'966', 'flag'=>'saudi_arabia.png'
            ],
            [
                'name'=>'SENEGAL', 'nick_name'=>'Senegal', 'alpha2_code'=>'SN', 'alpha3_code'=>'SEN', 'num_code'=>686, 'phone_code'=>'221', 'flag'=>'senegal.png'
            ],
            [
                'name'=>'SERBIA', 'nick_name'=>'Serbia', 'alpha2_code'=>'RS', 'alpha3_code'=>'SRB', 'num_code'=>688, 'phone_code'=>'381', 'flag'=>'serbia.png'
            ],
            [
                'name'=>'SERBIA AND MONTENEGRO', 'nick_name'=>'Serbia and Montenegro', 'alpha2_code'=>'CS', 'alpha3_code'=>'', 'num_code'=>0, 'phone_code'=>'381', 'flag'=>'serbia_and_montenegro.png'
            ],
            [
                'name'=>'SEYCHELLES', 'nick_name'=>'Seychelles', 'alpha2_code'=>'SC', 'alpha3_code'=>'SYC', 'num_code'=>690, 'phone_code'=>'248', 'flag'=>'seychelles.png'
            ],
            [
                'name'=>'SIERRA LEONE', 'nick_name'=>'Sierra Leone', 'alpha2_code'=>'SL', 'alpha3_code'=>'SLE', 'num_code'=>694, 'phone_code'=>'232', 'flag'=>'sierra_leone.png'
            ],
            [
                'name'=>'SINGAPORE', 'nick_name'=>'Singapore', 'alpha2_code'=>'SG', 'alpha3_code'=>'SGP', 'num_code'=>702, 'phone_code'=>'65', 'flag'=>'singapore.png'
            ],
            [
                'name'=>'SINT MAARTEN', 'nick_name'=>'Sint Maarten', 'alpha2_code'=>'SX', 'alpha3_code'=>'SXM', 'num_code'=>534, 'phone_code'=>'1', 'flag'=>'sint_maarten.png'
            ],
            [
                'name'=>'SLOVAKIA', 'nick_name'=>'Slovakia', 'alpha2_code'=>'SK', 'alpha3_code'=>'SVK', 'num_code'=>703, 'phone_code'=>'421', 'flag'=>'slovakia.png'
            ],
            [
                'name'=>'SLOVENIA','nick_name'=> 'Slovenia', 'alpha2_code'=>'SI', 'alpha3_code'=>'SVN', 'num_code'=>705, 'phone_code'=>'386', 'flag'=>'slovenia.png'
            ],
            [
                'name'=>'SOLOMON ISLANDS', 'nick_name'=>'Solomon Islands', 'alpha2_code'=>'SB', 'alpha3_code'=>'SLB', 'num_code'=>90, 'phone_code'=>'677', 'flag'=>'solomon_islands.png'
            ],
            [
                'name'=>'SOMALIA', 'nick_name'=>'Somalia', 'alpha2_code'=>'SO', 'alpha3_code'=>'SOM', 'num_code'=>706, 'phone_code'=>'252', 'flag'=>'somalia.png'
            ],
            [
                'name'=>'SOUTH AFRICA', 'nick_name'=>'South Africa', 'alpha2_code'=>'ZA', 'alpha3_code'=>'ZAF', 'num_code'=>710, 'phone_code'=>'27', 'flag'=>'south_africa.png'
            ],
            [
                'name'=>'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'nick_name'=>'South Georgia and the South Sandwich Islands', 'alpha2_code'=>'GS', 'alpha3_code'=>'', 'num_code'=>0, 'phone_code'=>'0', 'flag'=>'south_georgia_and_the_south_sandwich_islands.png'
            ],
            [
                'name'=>'SOUTH SUDAN', 'nick_name'=>'South Sudan', 'alpha2_code'=>'SS', 'alpha3_code'=>'SSD', 'num_code'=>728, 'phone_code'=>'211', 'flag'=>'south_sudan.png'
            ],
            [
                'name'=>'SPAIN', 'nick_name'=>'Spain', 'alpha2_code'=>'ES', 'alpha3_code'=>'ESP', 'num_code'=>724, 'phone_code'=>'34', 'flag'=>'spain.png'
            ],
            [
                'name'=>'SRI LANKA', 'nick_name'=>'Sri Lanka', 'alpha2_code'=>'LK', 'alpha3_code'=>'LKA', 'num_code'=>144, 'phone_code'=>'94', 'flag'=>'sri_lanka.png'
            ],
            [
                'name'=>'SUDAN', 'nick_name'=>'Sudan', 'alpha2_code'=>'SD', 'alpha3_code'=>'SDN', 'num_code'=>736, 'phone_code'=>'249', 'flag'=>'sudan.png'
            ],
            [
                'name'=>'SURINAME', 'nick_name'=>'Suriname', 'alpha2_code'=>'SR', 'alpha3_code'=>'SUR', 'num_code'=>740, 'phone_code'=>'597', 'flag'=>'suriname.png'
            ],
            [
                'name'=>'SVALBARD AND JAN MAYEN', 'nick_name'=>'Svalbard and Jan Mayen', 'alpha2_code'=>'SJ', 'alpha3_code'=>'SJM', 'num_code'=>744, 'phone_code'=>'47', 'flag'=>'svalbard_and_jan_mayen.png'
            ],
            [
                'name'=>'SWAZILAND', 'nick_name'=>'Swaziland', 'alpha2_code'=>'SZ', 'alpha3_code'=>'SWZ', 'num_code'=>748, 'phone_code'=>'268', 'flag'=>'swaziland.png'
            ],
            [
                'name'=>'SWEDEN', 'nick_name'=>'Sweden', 'alpha2_code'=>'SE', 'alpha3_code'=>'SWE', 'num_code'=>752, 'phone_code'=>'46', 'flag'=>'sweden.png'
            ],
            [
                'name'=>'SWITZERLAND', 'nick_name'=>'Switzerland', 'alpha2_code'=>'CH', 'alpha3_code'=>'CHE', 'num_code'=>756, 'phone_code'=>'41', 'flag'=>'switzerland.png'
            ],
            [
                'name'=>'SYRIAN ARAB REPUBLIC', 'nick_name'=>'Syrian Arab Republic', 'alpha2_code'=>'SY', 'alpha3_code'=>'SYR', 'num_code'=>760, 'phone_code'=>'963', 'flag'=>'syrian_arab_republic.png'
            ],
            [
                'name'=>'TAIWAN, PROVINCE OF CHINA', 'nick_name'=>'Taiwan, Province of China', 'alpha2_code'=>'TW', 'alpha3_code'=>'TWN', 'num_code'=>158, 'phone_code'=>'886', 'flag'=>'taiwan_province_of_china.png'
            ],
            [
                'name'=>'TAJIKISTAN', 'nick_name'=>'Tajikistan', 'alpha2_code'=>'TJ', 'alpha3_code'=>'TJK', 'num_code'=>762, 'phone_code'=>'992', 'flag'=>'tajikistan.png'
            ],
            [
                'name'=>'TANZANIA, UNITED REPUBLIC OF', 'nick_name'=>'Tanzania, United Republic of', 'alpha2_code'=>'TZ', 'alpha3_code'=>'TZA', 'num_code'=>834, 'phone_code'=>'255', 'flag'=>'tanzania_united_republic_of.png'
            ],
            [
                'name'=>'THAILAND', 'nick_name'=>'Thailand', 'alpha2_code'=>'TH', 'alpha3_code'=>'THA', 'num_code'=>764, 'phone_code'=>'66', 'flag'=>'thailand.png'
            ],
            [
                'name'=>'TIMOR-LESTE', 'nick_name'=>'Timor-Leste', 'alpha2_code'=>'TL', 'alpha3_code'=>'', 'num_code'=>0, 'phone_code'=>'670', 'flag'=>'timor_leste.png'
            ],
            [
                'name'=>'TOGO', 'nick_name'=>'Togo', 'alpha2_code'=>'TG', 'alpha3_code'=>'TGO', 'num_code'=>768, 'phone_code'=>'228', 'flag'=>'togo.png'
            ],
            [
                'name'=>'TOKELAU', 'nick_name'=>'Tokelau', 'alpha2_code'=>'TK', 'alpha3_code'=>'TKL', 'num_code'=>772, 'phone_code'=>'690', 'flag'=>'tokelau.png'
            ],
            [
                'name'=>'TONGA', 'nick_name'=>'Tonga', 'alpha2_code'=>'TO', 'alpha3_code'=>'TON', 'num_code'=>776, 'phone_code'=>'676', 'flag'=>'tonga.png'
            ],
            [
                'name'=>'TRINIDAD AND TOBAGO', 'nick_name'=>'Trinidad and Tobago', 'alpha2_code'=>'TT', 'alpha3_code'=>'TTO', 'num_code'=>780, 'phone_code'=>'1868', 'flag'=>'trinidad_and_tobago.png'
            ],
            [
                'name'=>'TUNISIA', 'nick_name'=>'Tunisia', 'alpha2_code'=>'TN', 'alpha3_code'=>'TUN', 'num_code'=>788, 'phone_code'=>'216', 'flag'=>'tunisia.png'
            ],
            [
                'name'=>'TURKEY', 'nick_name'=>'Turkey', 'alpha2_code'=>'TR', 'alpha3_code'=>'TUR', 'num_code'=>792, 'phone_code'=>'90', 'flag'=>'turkey.png'
            ],
            [
                'name'=>'TURKMENISTAN', 'nick_name'=>'Turkmenistan', 'alpha2_code'=>'TM', 'alpha3_code'=>'TKM', 'num_code'=>795, 'phone_code'=>'7370', 'flag'=>'turkmenistan.png'
            ],
            [
                'name'=>'TURKS AND CAICOS ISLANDS', 'nick_name'=>'Turks and Caicos Islands', 'alpha2_code'=>'TC', 'alpha3_code'=>'TCA', 'num_code'=>796, 'phone_code'=>'1649', 'flag'=>'turks_and_caicos_islands.png'
            ],
            [
                'name'=>'TUVALU', 'nick_name'=>'Tuvalu', 'alpha2_code'=>'TV', 'alpha3_code'=>'TUV', 'num_code'=>798, 'phone_code'=>'688', 'flag'=>'tuvalu.png'
            ],
            [
                'name'=>'UGANDA', 'nick_name'=>'Uganda', 'alpha2_code'=>'UG', 'alpha3_code'=>'UGA', 'num_code'=>800, 'phone_code'=>'256', 'flag'=>'uganda.png'
            ],
            [
                'name'=>'UKRAINE', 'nick_name'=>'Ukraine', 'alpha2_code'=>'UA', 'alpha3_code'=>'UKR', 'num_code'=>804, 'phone_code'=>'380', 'flag'=>'ukraine.png'
            ],
            [
                'name'=>'UNITED ARAB EMIRATES', 'nick_name'=>'United Arab Emirates', 'alpha2_code'=>'AE', 'alpha3_code'=>'ARE', 'num_code'=>784, 'phone_code'=>'971', 'flag'=>'united_arab_emirates.png'
            ],
            [
                'name'=>'UNITED KINGDOM', 'nick_name'=>'United Kingdom', 'alpha2_code'=>'GB', 'alpha3_code'=>'GBR', 'num_code'=>826, 'phone_code'=>'44', 'flag'=>'united_kingdom.png'
            ],
            [
                'name'=>'UNITED STATES', 'nick_name'=>'United States', 'alpha2_code'=>'US', 'alpha3_code'=>'USA', 'num_code'=>840, 'phone_code'=>'1', 'flag'=>'united_states.png'
            ],
            [
                'name'=>'UNITED STATES MINOR OUTLYING ISLANDS', 'nick_name'=>'United States Minor Outlying Islands', 'alpha2_code'=>'UM', 'alpha3_code'=>'', 'num_code'=>0, 'phone_code'=>'1', 'flag'=>'united_states_minor_outlying_islands.png'
            ],
            [
                'name'=>'URUGUAY', 'nick_name'=>'Uruguay', 'alpha2_code'=>'UY', 'alpha3_code'=>'URY', 'num_code'=>858, 'phone_code'=>'598', 'flag'=>'uruguay.png'
            ],
            [
                'name'=>'UZBEKISTAN', 'nick_name'=>'Uzbekistan', 'alpha2_code'=>'UZ', 'alpha3_code'=>'UZB', 'num_code'=>860, 'phone_code'=>'998', 'flag'=>'uzbekistan.png'
            ],
            [
                'name'=>'VANUATU', 'nick_name'=>'Vanuatu', 'alpha2_code'=>'VU', 'alpha3_code'=>'VUT', 'num_code'=>548, 'phone_code'=>'678', 'flag'=>'vanuatu.png'
            ],
            [
                'name'=>'VENEZUELA', 'nick_name'=>'Venezuela', 'alpha2_code'=>'VE', 'alpha3_code'=>'VEN', 'num_code'=>862, 'phone_code'=>'58', 'flag'=>'venezuela.png'
            ],
            [
                'name'=>'VIET NAM', 'nick_name'=>'Viet Nam', 'alpha2_code'=>'VN', 'alpha3_code'=>'VNM', 'num_code'=>704, 'phone_code'=>'84', 'flag'=>'viet_nam.png'
            ],
            [
                'name'=>'VIRGIN ISLANDS, BRITISH', 'nick_name'=>'Virgin Islands, British', 'alpha2_code'=>'VG', 'alpha3_code'=>'VGB', 'num_code'=>92, 'phone_code'=>'1284', 'flag'=>'virgin_islands_british.png'
            ],
            [
                'name'=>'VIRGIN ISLANDS, U.S.', 'nick_name'=>'Virgin Islands, U.s.', 'alpha2_code'=>'VI', 'alpha3_code'=>'VIR', 'num_code'=>850, 'phone_code'=>'1340', 'flag'=>'virgin_islands_u.s..png'
            ],
            [
                'name'=>'WALLIS AND FUTUNA', 'nick_name'=>'Wallis and Futuna', 'alpha2_code'=>'WF', 'alpha3_code'=>'WLF', 'num_code'=>876, 'phone_code'=>'681', 'flag'=>'wallis_and_futuna.png'
            ],
            [
                'name'=>'WESTERN SAHARA', 'nick_name'=>'Western Sahara', 'alpha2_code'=>'EH', 'alpha3_code'=>'ESH', 'num_code'=>732, 'phone_code'=>'212', 'flag'=>'western_ sahara.png'
            ],
            [
                'name'=>'YEMEN', 'nick_name'=>'Yemen', 'alpha2_code'=>'YE', 'alpha3_code'=>'YEM', 'num_code'=>887, 'phone_code'=>'967', 'flag'=>'yemen.png'
            ],
            [
                'name'=>'ZAMBIA', 'nick_name'=>'Zambia', 'alpha2_code'=>'ZM', 'alpha3_code'=>'ZMB', 'num_code'=>894, 'phone_code'=>'260', 'flag'=>'zambia.png'
            ],
            [
                'name'=>'ZIMBABWE', 'nick_name'=>'Zimbabwe', 'alpha2_code'=>'ZW', 'alpha3_code'=>'ZWE', 'num_code'=>716, 'phone_code'=>'263', 'flag'=>'zimbabwe.png']
        ];

        foreach ($countries as $country){
            Country::create( $country);
        }
    }
}
