<?php
use Illuminate\Database\Seeder;
use App\Models\Country as CountryModel;


class CountrySeeder extends Seeder
{

    /**
     * List of countries
     */
    private $countryCodes = [
        [
            'code' => 'AF',
            'name' => 'Afghanistan',
            'dialling_code' => '+93'
        ],
        [
            'code' => 'AL',
            'name' => 'Albania',
            'dialling_code' => '+355'
        ],
        [
            'code' => 'DZ',
            'name' => 'Algeria',
            'dialling_code' => '+213'
        ],
        [
            'code' => 'AS',
            'name' => 'American Samoa',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'AD',
            'name' => 'Andorra',
            'dialling_code' => '+376'
        ],
        [
            'code' => 'AO',
            'name' => 'Angola',
            'dialling_code' => '+244'
        ],
        [
            'code' => 'AI',
            'name' => 'Anguilla',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'AG',
            'name' => 'Antigua',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'AR',
            'name' => 'Argentina',
            'dialling_code' => '+54'
        ],
        [
            'code' => 'AM',
            'name' => 'Armenia',
            'dialling_code' => '+374'
        ],
        [
            'code' => 'AW',
            'name' => 'Aruba',
            'dialling_code' => '+297'
        ],
        [
            'code' => 'AU',
            'name' => 'Australia',
            'dialling_code' => '+61'
        ],
        [
            'code' => 'AT',
            'name' => 'Austria',
            'dialling_code' => '+43'
        ],
        [
            'code' => 'AZ',
            'name' => 'Azerbaijan',
            'dialling_code' => '+994'
        ],
        [
            'code' => 'BH',
            'name' => 'Bahrain',
            'dialling_code' => '+973'
        ],
        [
            'code' => 'BD',
            'name' => 'Bangladesh',
            'dialling_code' => '+880'
        ],
        [
            'code' => 'BB',
            'name' => 'Barbados',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'BY',
            'name' => 'Belarus',
            'dialling_code' => '+375'
        ],
        [
            'code' => 'BE',
            'name' => 'Belgium',
            'dialling_code' => '+32'
        ],
        [
            'code' => 'BZ',
            'name' => 'Belize',
            'dialling_code' => '+501'
        ],
        [
            'code' => 'BJ',
            'name' => 'Benin',
            'dialling_code' => '+229'
        ],
        [
            'code' => 'BM',
            'name' => 'Bermuda',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'BT',
            'name' => 'Bhutan',
            'dialling_code' => '+975'
        ],
        [
            'code' => 'BO',
            'name' => 'Bolivia',
            'dialling_code' => '+591'
        ],
        [
            'code' => 'BA',
            'name' => 'Bosnia and Herzegovina',
            'dialling_code' => '+387'
        ],
        [
            'code' => 'BW',
            'name' => 'Botswana',
            'dialling_code' => '+267'
        ],
        [
            'code' => 'BR',
            'name' => 'Brazil',
            'dialling_code' => '+55'
        ],
        [
            'code' => 'IO',
            'name' => 'British Indian Ocean Territory',
            'dialling_code' => '+246'
        ],
        [
            'code' => 'VG',
            'name' => 'British Virgin Islands',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'BN',
            'name' => 'Brunei',
            'dialling_code' => '+673'
        ],
        [
            'code' => 'BG',
            'name' => 'Bulgaria',
            'dialling_code' => '+359'
        ],
        [
            'code' => 'BF',
            'name' => 'Burkina Faso',
            'dialling_code' => '+226'
        ],
        [
            'code' => 'MM',
            'name' => 'Burma Myanmar',
            'dialling_code' => '+95'
        ],
        [
            'code' => 'BI',
            'name' => 'Burundi',
            'dialling_code' => '+257'
        ],
        [
            'code' => 'KH',
            'name' => 'Cambodia',
            'dialling_code' => '+855'
        ],
        [
            'code' => 'CM',
            'name' => 'Cameroon',
            'dialling_code' => '+237'
        ],
        [
            'code' => 'CA',
            'name' => 'Canada',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'CV',
            'name' => 'Cape Verde',
            'dialling_code' => '+238'
        ],
        [
            'code' => 'KY',
            'name' => 'Cayman Islands',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'CF',
            'name' => 'Central African Republic',
            'dialling_code' => '+236'
        ],
        [
            'code' => 'TD',
            'name' => 'Chad',
            'dialling_code' => '+235'
        ],
        [
            'code' => 'CL',
            'name' => 'Chile',
            'dialling_code' => '+56'
        ],
        [
            'code' => 'CN',
            'name' => 'China',
            'dialling_code' => '+86'
        ],
        [
            'code' => 'CO',
            'name' => 'Colombia',
            'dialling_code' => '+57'
        ],
        [
            'code' => 'KM',
            'name' => 'Comoros',
            'dialling_code' => '+269'
        ],
        [
            'code' => 'CK',
            'name' => 'Cook Islands',
            'dialling_code' => '+682'
        ],
        [
            'code' => 'CR',
            'name' => 'Costa Rica',
            'dialling_code' => '+506'
        ],
        [
            'code' => 'CI',
            'name' => 'Côte d\'Ivoire',
            'dialling_code' => '+225'
        ],
        [
            'code' => 'HR',
            'name' => 'Croatia',
            'dialling_code' => '+385'
        ],
        [
            'code' => 'CU',
            'name' => 'Cuba',
            'dialling_code' => '+53'
        ],
        [
            'code' => 'CY',
            'name' => 'Cyprus',
            'dialling_code' => '+357'
        ],
        [
            'code' => 'CZ',
            'name' => 'Czech Republic',
            'dialling_code' => '+420'
        ],
        [
            'code' => 'CD',
            'name' => 'Democratic Republic of Congo',
            'dialling_code' => '+243'
        ],
        [
            'code' => 'DK',
            'name' => 'Denmark',
            'dialling_code' => '+45'
        ],
        [
            'code' => 'DJ',
            'name' => 'Djibouti',
            'dialling_code' => '+253'
        ],
        [
            'code' => 'DM',
            'name' => 'Dominica',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'DO',
            'name' => 'Dominican Republic',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'EC',
            'name' => 'Ecuador',
            'dialling_code' => '+593'
        ],
        [
            'code' => 'EG',
            'name' => 'Egypt',
            'dialling_code' => '+20'
        ],
        [
            'code' => 'SV',
            'name' => 'El Salvador',
            'dialling_code' => '+503'
        ],
        [
            'code' => 'GQ',
            'name' => 'Equatorial Guinea',
            'dialling_code' => '+240'
        ],
        [
            'code' => 'ER',
            'name' => 'Eritrea',
            'dialling_code' => '+291'
        ],
        [
            'code' => 'EE',
            'name' => 'Estonia',
            'dialling_code' => '+372'
        ],
        [
            'code' => 'ET',
            'name' => 'Ethiopia',
            'dialling_code' => '+251'
        ],
        [
            'code' => 'FK',
            'name' => 'Falkland Islands',
            'dialling_code' => '+500'
        ],
        [
            'code' => 'FO',
            'name' => 'Faroe Islands',
            'dialling_code' => '+298'
        ],
        [
            'code' => 'FM',
            'name' => 'Federated States of Micronesia',
            'dialling_code' => '+691'
        ],
        [
            'code' => 'FJ',
            'name' => 'Fiji',
            'dialling_code' => '+679'
        ],
        [
            'code' => 'FI',
            'name' => 'Finland',
            'dialling_code' => '+358'
        ],
        [
            'code' => 'FR',
            'name' => 'France',
            'dialling_code' => '+33'
        ],
        [
            'code' => 'GF',
            'name' => 'French Guiana',
            'dialling_code' => '+594'
        ],
        [
            'code' => 'PF',
            'name' => 'French Polynesia',
            'dialling_code' => '+689'
        ],
        [
            'code' => 'GA',
            'name' => 'Gabon',
            'dialling_code' => '+241'
        ],
        [
            'code' => 'GE',
            'name' => 'Georgia',
            'dialling_code' => '+995'
        ],
        [
            'code' => 'DE',
            'name' => 'Germany',
            'dialling_code' => '+49'
        ],
        [
            'code' => 'GH',
            'name' => 'Ghana',
            'dialling_code' => '+233'
        ],
        [
            'code' => 'GI',
            'name' => 'Gibraltar',
            'dialling_code' => '+350'
        ],
        [
            'code' => 'GR',
            'name' => 'Greece',
            'dialling_code' => '+30'
        ],
        [
            'code' => 'GL',
            'name' => 'Greenland',
            'dialling_code' => '+299'
        ],
        [
            'code' => 'GD',
            'name' => 'Grenada',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'GP',
            'name' => 'Guadeloupe',
            'dialling_code' => '+590'
        ],
        [
            'code' => 'GU',
            'name' => 'Guam',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'GT',
            'name' => 'Guatemala',
            'dialling_code' => '+502'
        ],
        [
            'code' => 'GN',
            'name' => 'Guinea',
            'dialling_code' => '+224'
        ],
        [
            'code' => 'GW',
            'name' => 'Guinea-Bissau',
            'dialling_code' => '+245'
        ],
        [
            'code' => 'GY',
            'name' => 'Guyana',
            'dialling_code' => '+592'
        ],
        [
            'code' => 'HT',
            'name' => 'Haiti',
            'dialling_code' => '+509'
        ],
        [
            'code' => 'HN',
            'name' => 'Honduras',
            'dialling_code' => '+504'
        ],
        [
            'code' => 'HK',
            'name' => 'Hong Kong',
            'dialling_code' => '+852'
        ],
        [
            'code' => 'HU',
            'name' => 'Hungary',
            'dialling_code' => '+36'
        ],
        [
            'code' => 'IS',
            'name' => 'Iceland',
            'dialling_code' => '+354'
        ],
        [
            'code' => 'IN',
            'name' => 'India',
            'dialling_code' => '+91'
        ],
        [
            'code' => 'ID',
            'name' => 'Indonesia',
            'dialling_code' => '+62'
        ],
        [
            'code' => 'IR',
            'name' => 'Iran',
            'dialling_code' => '+98'
        ],
        [
            'code' => 'IQ',
            'name' => 'Iraq',
            'dialling_code' => '+964'
        ],
        [
            'code' => 'IE',
            'name' => 'Ireland',
            'dialling_code' => '+353'
        ],
        [
            'code' => 'IL',
            'name' => 'Israel',
            'dialling_code' => '+972'
        ],
        [
            'code' => 'IT',
            'name' => 'Italy',
            'dialling_code' => '+39'
        ],
        [
            'code' => 'JM',
            'name' => 'Jamaica',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'JP',
            'name' => 'Japan',
            'dialling_code' => '+81'
        ],
        [
            'code' => 'JO',
            'name' => 'Jordan',
            'dialling_code' => '+962'
        ],
        [
            'code' => 'KZ',
            'name' => 'Kazakhstan',
            'dialling_code' => '+7'
        ],
        [
            'code' => 'KE',
            'name' => 'Kenya',
            'dialling_code' => '+254'
        ],
        [
            'code' => 'KI',
            'name' => 'Kiribati',
            'dialling_code' => '+686'
        ],
        [
            'code' => 'XK',
            'name' => 'Kosovo',
            'dialling_code' => '+381'
        ],
        [
            'code' => 'KW',
            'name' => 'Kuwait',
            'dialling_code' => '+965'
        ],
        [
            'code' => 'KG',
            'name' => 'Kyrgyzstan',
            'dialling_code' => '+996'
        ],
        [
            'code' => 'LA',
            'name' => 'Laos',
            'dialling_code' => '+856'
        ],
        [
            'code' => 'LV',
            'name' => 'Latvia',
            'dialling_code' => '+371'
        ],
        [
            'code' => 'LB',
            'name' => 'Lebanon',
            'dialling_code' => '+961'
        ],
        [
            'code' => 'LS',
            'name' => 'Lesotho',
            'dialling_code' => '+266'
        ],
        [
            'code' => 'LR',
            'name' => 'Liberia',
            'dialling_code' => '+231'
        ],
        [
            'code' => 'LY',
            'name' => 'Libya',
            'dialling_code' => '+218'
        ],
        [
            'code' => 'LI',
            'name' => 'Liechtenstein',
            'dialling_code' => '+423'
        ],
        [
            'code' => 'LT',
            'name' => 'Lithuania',
            'dialling_code' => '+370'
        ],
        [
            'code' => 'LU',
            'name' => 'Luxembourg',
            'dialling_code' => '+352'
        ],
        [
            'code' => 'MO',
            'name' => 'Macau',
            'dialling_code' => '+853'
        ],
        [
            'code' => 'MK',
            'name' => 'Macedonia',
            'dialling_code' => '+389'
        ],
        [
            'code' => 'MG',
            'name' => 'Madagascar',
            'dialling_code' => '+261'
        ],
        [
            'code' => 'MW',
            'name' => 'Malawi',
            'dialling_code' => '+265'
        ],
        [
            'code' => 'MY',
            'name' => 'Malaysia',
            'dialling_code' => '+60'
        ],
        [
            'code' => 'MV',
            'name' => 'Maldives',
            'dialling_code' => '+960'
        ],
        [
            'code' => 'ML',
            'name' => 'Mali',
            'dialling_code' => '+223'
        ],
        [
            'code' => 'MT',
            'name' => 'Malta',
            'dialling_code' => '+356'
        ],
        [
            'code' => 'MH',
            'name' => 'Marshall Islands',
            'dialling_code' => '+692'
        ],
        [
            'code' => 'MQ',
            'name' => 'Martinique',
            'dialling_code' => '+596'
        ],
        [
            'code' => 'MR',
            'name' => 'Mauritania',
            'dialling_code' => '+222'
        ],
        [
            'code' => 'MU',
            'name' => 'Mauritius',
            'dialling_code' => '+230'
        ],
        [
            'code' => 'YT',
            'name' => 'Mayotte',
            'dialling_code' => '+262'
        ],
        [
            'code' => 'MX',
            'name' => 'Mexico',
            'dialling_code' => '+52'
        ],
        [
            'code' => 'MD',
            'name' => 'Moldova',
            'dialling_code' => '+373'
        ],
        [
            'code' => 'MC',
            'name' => 'Monaco',
            'dialling_code' => '+377'
        ],
        [
            'code' => 'MN',
            'name' => 'Mongolia',
            'dialling_code' => '+976'
        ],
        [
            'code' => 'ME',
            'name' => 'Montenegro',
            'dialling_code' => '+382'
        ],
        [
            'code' => 'MS',
            'name' => 'Montserrat',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'MA',
            'name' => 'Morocco',
            'dialling_code' => '+212'
        ],
        [
            'code' => 'MZ',
            'name' => 'Mozambique',
            'dialling_code' => '+258'
        ],
        [
            'code' => 'NA',
            'name' => 'Namibia',
            'dialling_code' => '+264'
        ],
        [
            'code' => 'NR',
            'name' => 'Nauru',
            'dialling_code' => '+674'
        ],
        [
            'code' => 'NP',
            'name' => 'Nepal',
            'dialling_code' => '+977'
        ],
        [
            'code' => 'NL',
            'name' => 'Netherlands',
            'dialling_code' => '+31'
        ],
        [
            'code' => 'AN',
            'name' => 'Netherlands Antilles',
            'dialling_code' => '+599'
        ],
        [
            'code' => 'NC',
            'name' => 'New Caledonia',
            'dialling_code' => '+687'
        ],
        [
            'code' => 'NZ',
            'name' => 'New Zealand',
            'dialling_code' => '+64'
        ],
        [
            'code' => 'NI',
            'name' => 'Nicaragua',
            'dialling_code' => '+505'
        ],
        [
            'code' => 'NE',
            'name' => 'Niger',
            'dialling_code' => '+227'
        ],
        [
            'code' => 'NG',
            'name' => 'Nigeria',
            'dialling_code' => '+234'
        ],
        [
            'code' => 'NU',
            'name' => 'Niue',
            'dialling_code' => '+683'
        ],
        [
            'code' => 'NF',
            'name' => 'Norfolk Island',
            'dialling_code' => '+672'
        ],
        [
            'code' => 'KP',
            'name' => 'North Korea',
            'dialling_code' => '+850'
        ],
        [
            'code' => 'MP',
            'name' => 'Northern Mariana Islands',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'NO',
            'name' => 'Norway',
            'dialling_code' => '+47'
        ],
        [
            'code' => 'OM',
            'name' => 'Oman',
            'dialling_code' => '+968'
        ],
        [
            'code' => 'PK',
            'name' => 'Pakistan',
            'dialling_code' => '+92'
        ],
        [
            'code' => 'PW',
            'name' => 'Palau',
            'dialling_code' => '+680'
        ],
        [
            'code' => 'PS',
            'name' => 'Palestine',
            'dialling_code' => '+970'
        ],
        [
            'code' => 'PA',
            'name' => 'Panama',
            'dialling_code' => '+507'
        ],
        [
            'code' => 'PG',
            'name' => 'Papua New Guinea',
            'dialling_code' => '+675'
        ],
        [
            'code' => 'PY',
            'name' => 'Paraguay',
            'dialling_code' => '+595'
        ],
        [
            'code' => 'PE',
            'name' => 'Peru',
            'dialling_code' => '+51'
        ],
        [
            'code' => 'PH',
            'name' => 'Philippines',
            'dialling_code' => '+63'
        ],
        [
            'code' => 'PL',
            'name' => 'Poland',
            'dialling_code' => '+48'
        ],
        [
            'code' => 'PT',
            'name' => 'Portugal',
            'dialling_code' => '+351'
        ],
        [
            'code' => 'PR',
            'name' => 'Puerto Rico',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'QA',
            'name' => 'Qatar',
            'dialling_code' => '+974'
        ],
        [
            'code' => 'CG',
            'name' => 'Republic of the Congo',
            'dialling_code' => '+242'
        ],
        [
            'code' => 'RE',
            'name' => 'Réunion',
            'dialling_code' => '+262'
        ],
        [
            'code' => 'RO',
            'name' => 'Romania',
            'dialling_code' => '+40'
        ],
        [
            'code' => 'RU',
            'name' => 'Russia',
            'dialling_code' => '+7'
        ],
        [
            'code' => 'RW',
            'name' => 'Rwanda',
            'dialling_code' => '+250'
        ],
        [
            'code' => 'BL',
            'name' => 'Saint Barthélemy',
            'dialling_code' => '+590'
        ],
        [
            'code' => 'SH',
            'name' => 'Saint Helena',
            'dialling_code' => '+290'
        ],
        [
            'code' => 'KN',
            'name' => 'Saint Kitts and Nevis',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'MF',
            'name' => 'Saint Martin',
            'dialling_code' => '+590'
        ],
        [
            'code' => 'PM',
            'name' => 'Saint Pierre and Miquelon',
            'dialling_code' => '+508'
        ],
        [
            'code' => 'VC',
            'name' => 'Saint Vincent and the Grenadines',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'WS',
            'name' => 'Samoa',
            'dialling_code' => '+685'
        ],
        [
            'code' => 'SM',
            'name' => 'San Marino',
            'dialling_code' => '+378'
        ],
        [
            'code' => 'ST',
            'name' => 'São Tomé and Príncipe',
            'dialling_code' => '+239'
        ],
        [
            'code' => 'SA',
            'name' => 'Saudi Arabia',
            'dialling_code' => '+966'
        ],
        [
            'code' => 'SN',
            'name' => 'Senegal',
            'dialling_code' => '+221'
        ],
        [
            'code' => 'RS',
            'name' => 'Serbia',
            'dialling_code' => '+381'
        ],
        [
            'code' => 'SC',
            'name' => 'Seychelles',
            'dialling_code' => '+248'
        ],
        [
            'code' => 'SL',
            'name' => 'Sierra Leone',
            'dialling_code' => '+232'
        ],
        [
            'code' => 'SG',
            'name' => 'Singapore',
            'dialling_code' => '+65'
        ],
        [
            'code' => 'SK',
            'name' => 'Slovakia',
            'dialling_code' => '+421'
        ],
        [
            'code' => 'SI',
            'name' => 'Slovenia',
            'dialling_code' => '+386'
        ],
        [
            'code' => 'SB',
            'name' => 'Solomon Islands',
            'dialling_code' => '+677'
        ],
        [
            'code' => 'SO',
            'name' => 'Somalia',
            'dialling_code' => '+252'
        ],
        [
            'code' => 'ZA',
            'name' => 'South Africa',
            'dialling_code' => '+27'
        ],
        [
            'code' => 'KR',
            'name' => 'South Korea',
            'dialling_code' => '+82'
        ],
        [
            'code' => 'ES',
            'name' => 'Spain',
            'dialling_code' => '+34'
        ],
        [
            'code' => 'LK',
            'name' => 'Sri Lanka',
            'dialling_code' => '+94'
        ],
        [
            'code' => 'LC',
            'name' => 'St. Lucia',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'SD',
            'name' => 'Sudan',
            'dialling_code' => '+249'
        ],
        [
            'code' => 'SR',
            'name' => 'Suriname',
            'dialling_code' => '+597'
        ],
        [
            'code' => 'SZ',
            'name' => 'Swaziland',
            'dialling_code' => '+268'
        ],
        [
            'code' => 'SE',
            'name' => 'Sweden',
            'dialling_code' => '+46'
        ],
        [
            'code' => 'CH',
            'name' => 'Switzerland',
            'dialling_code' => '+41'
        ],
        [
            'code' => 'SY',
            'name' => 'Syria',
            'dialling_code' => '+963'
        ],
        [
            'code' => 'TW',
            'name' => 'Taiwan',
            'dialling_code' => '+886'
        ],
        [
            'code' => 'TJ',
            'name' => 'Tajikistan',
            'dialling_code' => '+992'
        ],
        [
            'code' => 'TZ',
            'name' => 'Tanzania',
            'dialling_code' => '+255'
        ],
        [
            'code' => 'TH',
            'name' => 'Thailand',
            'dialling_code' => '+66'
        ],
        [
            'code' => 'BS',
            'name' => 'The Bahamas',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'GM',
            'name' => 'The Gambia',
            'dialling_code' => '+220'
        ],
        [
            'code' => 'TL',
            'name' => 'Timor-Leste',
            'dialling_code' => '+670'
        ],
        [
            'code' => 'TG',
            'name' => 'Togo',
            'dialling_code' => '+228'
        ],
        [
            'code' => 'TK',
            'name' => 'Tokelau',
            'dialling_code' => '+690'
        ],
        [
            'code' => 'TO',
            'name' => 'Tonga',
            'dialling_code' => '+676'
        ],
        [
            'code' => 'TT',
            'name' => 'Trinidad and Tobago',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'TN',
            'name' => 'Tunisia',
            'dialling_code' => '+216'
        ],
        [
            'code' => 'TR',
            'name' => 'Turkey',
            'dialling_code' => '+90'
        ],
        [
            'code' => 'TM',
            'name' => 'Turkmenistan',
            'dialling_code' => '+993'
        ],
        [
            'code' => 'TC',
            'name' => 'Turks and Caicos Islands',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'TV',
            'name' => 'Tuvalu',
            'dialling_code' => '+688'
        ],
        [
            'code' => 'UG',
            'name' => 'Uganda',
            'dialling_code' => '+256'
        ],
        [
            'code' => 'UA',
            'name' => 'Ukraine',
            'dialling_code' => '+380'
        ],
        [
            'code' => 'AE',
            'name' => 'United Arab Emirates',
            'dialling_code' => '+971'
        ],
        [
            'code' => 'GB',
            'name' => 'United Kingdom',
            'dialling_code' => '+44'
        ],
        [
            'code' => 'US',
            'name' => 'United States',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'UY',
            'name' => 'Uruguay',
            'dialling_code' => '+598'
        ],
        [
            'code' => 'VI',
            'name' => 'US Virgin Islands',
            'dialling_code' => '+1'
        ],
        [
            'code' => 'UZ',
            'name' => 'Uzbekistan',
            'dialling_code' => '+998'
        ],
        [
            'code' => 'VU',
            'name' => 'Vanuatu',
            'dialling_code' => '+678'
        ],
        [
            'code' => 'VA',
            'name' => 'Vatican City',
            'dialling_code' => '+39'
        ],
        [
            'code' => 'VE',
            'name' => 'Venezuela',
            'dialling_code' => '+58'
        ],
        [
            'code' => 'VN',
            'name' => 'Vietnam',
            'dialling_code' => '+84'
        ],
        [
            'code' => 'WF',
            'name' => 'Wallis and Futuna',
            'dialling_code' => '+681'
        ],
        [
            'code' => 'YE',
            'name' => 'Yemen',
            'dialling_code' => '+967'
        ],
        [
            'code' => 'ZM',
            'name' => 'Zambia',
            'dialling_code' => '+260'
        ],
        [
            'code' => 'ZW',
            'name' => 'Zimbabwe',
            'dialling_code' => '+263'
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
    	
    	CountryModel::truncate();
    	
        foreach ( $this->countryCodes as $cc ) {
            $ccm = new CountryModel( $cc );
            $ccm->save();
        }
    }
}
