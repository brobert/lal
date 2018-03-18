<?php
use Illuminate\Database\Seeder;
use App\Models\GeoIpCountry as GeoIpCountryModel;

class GeoIpCountrySeeder extends Seeder
{

    private $geoIpCountries = array (
        array (
            'country_code' => 'AD',
            'country' => 'Andorra',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '295'
        ),
        array (
            'country_code' => 'AE',
            'country' => 'United Arab Emirates',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'AED',
            'default_time_zoneid' => '215'
        ),
        array (
            'country_code' => 'AF',
            'country' => 'Afghanistan',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'AFN',
            'default_time_zoneid' => '225'
        ),
        array (
            'country_code' => 'AG',
            'country' => 'Antigua and Barbuda',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'XCD',
            'default_time_zoneid' => '56'
        ),
        array (
            'country_code' => 'AI',
            'country' => 'Anguilla',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'XCD',
            'default_time_zoneid' => '55'
        ),
        array (
            'country_code' => 'AL',
            'country' => 'Albania',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'ALL',
            'default_time_zoneid' => '328'
        ),
        array (
            'country_code' => 'AM',
            'country' => 'Armenia',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'AMD',
            'default_time_zoneid' => '268'
        ),
        array (
            'country_code' => 'AN',
            'country' => 'Netherlands Antilles',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'ANG',
            'default_time_zoneid' => '89'
        ),
        array (
            'country_code' => 'AO',
            'country' => 'Angola',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'AOA',
            'default_time_zoneid' => '34'
        ),
        array (
            'country_code' => 'AP',
            'country' => 'Asia/Pacific Region',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => NULL,
            'default_time_zoneid' => NULL
        ),
        array (
            'country_code' => 'AQ',
            'country' => 'Antarctica',
            'continent_code' => 'AN',
            'continent' => '',
            'default_currency' => 'AQD',
            'default_time_zoneid' => '185'
        ),
        array (
            'country_code' => 'AR',
            'country' => 'Argentina',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'ARS',
            'default_time_zoneid' => '58'
        ),
        array (
            'country_code' => 'AS',
            'country' => 'American Samoa',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '377'
        ),
        array (
            'country_code' => 'AT',
            'country' => 'Austria',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '331'
        ),
        array (
            'country_code' => 'AU',
            'country' => 'Australia',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'AUD',
            'default_time_zoneid' => '290'
        ),
        array (
            'country_code' => 'AW',
            'country' => 'Aruba',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'ANG',
            'default_time_zoneid' => '68'
        ),
        array (
            'country_code' => 'AX',
            'country' => 'Aland Islands',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '428'
        ),
        array (
            'country_code' => 'AZ',
            'country' => 'Azerbaijan',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'AZN',
            'default_time_zoneid' => '203'
        ),
        array (
            'country_code' => 'BA',
            'country' => 'Bosnia and Herzegovina',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'BAM',
            'default_time_zoneid' => '431'
        ),
        array (
            'country_code' => 'BB',
            'country' => 'Barbados',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'BBD',
            'default_time_zoneid' => '72'
        ),
        array (
            'country_code' => 'BD',
            'country' => 'Bangladesh',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'BDT',
            'default_time_zoneid' => '213'
        ),
        array (
            'country_code' => 'BE',
            'country' => 'Belgium',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '299'
        ),
        array (
            'country_code' => 'BF',
            'country' => 'Burkina Faso',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'XOF',
            'default_time_zoneid' => '47'
        ),
        array (
            'country_code' => 'BG',
            'country' => 'Bulgaria',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'BGN',
            'default_time_zoneid' => '325'
        ),
        array (
            'country_code' => 'BH',
            'country' => 'Bahrain',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'BHD',
            'default_time_zoneid' => '202'
        ),
        array (
            'country_code' => 'BI',
            'country' => 'Burundi',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'BIF',
            'default_time_zoneid' => '13'
        ),
        array (
            'country_code' => 'BJ',
            'country' => 'Benin',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'XOF',
            'default_time_zoneid' => '48'
        ),
        array (
            'country_code' => 'BM',
            'country' => 'Bermuda',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'BMD',
            'default_time_zoneid' => '270'
        ),
        array (
            'country_code' => 'BN',
            'country' => 'Brunei Darussalam',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'BND',
            'default_time_zoneid' => '207'
        ),
        array (
            'country_code' => 'BO',
            'country' => 'Bolivia',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'BOB',
            'default_time_zoneid' => '126'
        ),
        array (
            'country_code' => 'BR',
            'country' => 'Brazil',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'BRL',
            'default_time_zoneid' => '166'
        ),
        array (
            'country_code' => 'BS',
            'country' => 'Bahamas',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'BSD',
            'default_time_zoneid' => '143'
        ),
        array (
            'country_code' => 'BT',
            'country' => 'Bhutan',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'INR',
            'default_time_zoneid' => '260'
        ),
        array (
            'country_code' => 'BV',
            'country' => 'Bouvet Island',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'NOK',
            'default_time_zoneid' => NULL
        ),
        array (
            'country_code' => 'BW',
            'country' => 'Botswana',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'BWP',
            'default_time_zoneid' => '24'
        ),
        array (
            'country_code' => 'BY',
            'country' => 'Belarus',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'BYR',
            'default_time_zoneid' => '315'
        ),
        array (
            'country_code' => 'BZ',
            'country' => 'Belize',
            'continent_code' => 'CA',
            'continent' => 'Central America',
            'default_currency' => 'BZD',
            'default_time_zoneid' => '74'
        ),
        array (
            'country_code' => 'CA',
            'country' => 'Canada',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'CAD',
            'default_time_zoneid' => '178'
        ),
        array (
            'country_code' => 'CC',
            'country' => 'Cocos (Keeling) Islands',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'AUD',
            'default_time_zoneid' => '341'
        ),
        array (
            'country_code' => 'CD',
            'country' => 'Congo, The Democratic Republic of the Congo',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'CDF',
            'default_time_zoneid' => '30'
        ),
        array (
            'country_code' => 'CF',
            'country' => 'Central African Republic',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'XAF',
            'default_time_zoneid' => '8'
        ),
        array (
            'country_code' => 'CG',
            'country' => 'Congo',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'XAF',
            'default_time_zoneid' => '12'
        ),
        array (
            'country_code' => 'CH',
            'country' => 'Switzerland',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'CHF',
            'default_time_zoneid' => '336'
        ),
        array (
            'country_code' => 'CI',
            'country' => 'Cote d\'Ivoire',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'XOF',
            'default_time_zoneid' => '2'
        ),
        array (
            'country_code' => 'CK',
            'country' => 'Cook Islands',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'NZD',
            'default_time_zoneid' => '382'
        ),
        array (
            'country_code' => 'CL',
            'country' => 'Chile',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'CLP',
            'default_time_zoneid' => '164'
        ),
        array (
            'country_code' => 'CM',
            'country' => 'Cameroon',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'XAF',
            'default_time_zoneid' => '21'
        ),
        array (
            'country_code' => 'CN',
            'country' => 'China',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'CNY',
            'default_time_zoneid' => '254'
        ),
        array (
            'country_code' => 'CO',
            'country' => 'Colombia',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'COP',
            'default_time_zoneid' => '77'
        ),
        array (
            'country_code' => 'CR',
            'country' => 'Costa Rica',
            'continent_code' => 'CA',
            'continent' => 'Central America',
            'default_currency' => 'CRC',
            'default_time_zoneid' => '87'
        ),
        array (
            'country_code' => 'CU',
            'country' => 'Cuba',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'CUP',
            'default_time_zoneid' => '110'
        ),
        array (
            'country_code' => 'CV',
            'country' => 'Cape Verde',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'CVE',
            'default_time_zoneid' => '272'
        ),
        array (
            'country_code' => 'CX',
            'country' => 'Christmas Island',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'AUD',
            'default_time_zoneid' => '340'
        ),
        array (
            'country_code' => 'CY',
            'country' => 'Cyprus',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'CYP',
            'default_time_zoneid' => '239'
        ),
        array (
            'country_code' => 'CZ',
            'country' => 'Czech Republic',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'CZK',
            'default_time_zoneid' => '320'
        ),
        array (
            'country_code' => 'DE',
            'country' => 'Germany',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '1'
        ),
        array (
            'country_code' => 'DJ',
            'country' => 'Djibouti',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'DJF',
            'default_time_zoneid' => '20'
        ),
        array (
            'country_code' => 'DK',
            'country' => 'Denmark',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'DKK',
            'default_time_zoneid' => '303'
        ),
        array (
            'country_code' => 'DM',
            'country' => 'Dominica',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'XCD',
            'default_time_zoneid' => '95'
        ),
        array (
            'country_code' => 'DO',
            'country' => 'Dominican Republic',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'DOP',
            'default_time_zoneid' => '165'
        ),
        array (
            'country_code' => 'DZ',
            'country' => 'Algeria',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'DZD',
            'default_time_zoneid' => '5'
        ),
        array (
            'country_code' => 'EC',
            'country' => 'Ecuador',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'ECS',
            'default_time_zoneid' => '107'
        ),
        array (
            'country_code' => 'EE',
            'country' => 'Estonia',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EEK',
            'default_time_zoneid' => '327'
        ),
        array (
            'country_code' => 'EG',
            'country' => 'Egypt',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'EGP',
            'default_time_zoneid' => '14'
        ),
        array (
            'country_code' => 'EH',
            'country' => 'Western Sahara',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'MAD',
            'default_time_zoneid' => '22'
        ),
        array (
            'country_code' => 'ER',
            'country' => 'Eritrea',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'ETB',
            'default_time_zoneid' => '6'
        ),
        array (
            'country_code' => 'ES',
            'country' => 'Spain',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '313'
        ),
        array (
            'country_code' => 'ET',
            'country' => 'Ethiopia',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'ETB',
            'default_time_zoneid' => '4'
        ),
        array (
            'country_code' => 'EU',
            'country' => 'Europe',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => NULL,
            'default_time_zoneid' => NULL
        ),
        array (
            'country_code' => 'FI',
            'country' => 'Finland',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '306'
        ),
        array (
            'country_code' => 'FJ',
            'country' => 'Fiji',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'FJD',
            'default_time_zoneid' => '359'
        ),
        array (
            'country_code' => 'FK',
            'country' => 'Falkland Islands (Malvinas)',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'FKP',
            'default_time_zoneid' => '278'
        ),
        array (
            'country_code' => 'FM',
            'country' => 'Micronesia, Republic of Macedonia',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'USD',
            'default_time_zoneid' => '368'
        ),
        array (
            'country_code' => 'FO',
            'country' => 'Faroe Islands',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'DKK',
            'default_time_zoneid' => '273'
        ),
        array (
            'country_code' => 'FR',
            'country' => 'France',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '319'
        ),
        array (
            'country_code' => 'GA',
            'country' => 'Gabon',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'XAF',
            'default_time_zoneid' => '32'
        ),
        array (
            'country_code' => 'GB',
            'country' => 'United Kingdom',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'GBP',
            'default_time_zoneid' => '311'
        ),
        array (
            'country_code' => 'GD',
            'country' => 'Grenada',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'XCD',
            'default_time_zoneid' => '104'
        ),
        array (
            'country_code' => 'GE',
            'country' => 'Georgia',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'GEL',
            'default_time_zoneid' => '258'
        ),
        array (
            'country_code' => 'GF',
            'country' => 'French Guiana',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '83'
        ),
        array (
            'country_code' => 'GG',
            'country' => 'Guernsey',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'GGP',
            'default_time_zoneid' => '423'
        ),
        array (
            'country_code' => 'GH',
            'country' => 'Ghana',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'GHS',
            'default_time_zoneid' => '3'
        ),
        array (
            'country_code' => 'GI',
            'country' => 'Gibraltar',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'GIP',
            'default_time_zoneid' => '305'
        ),
        array (
            'country_code' => 'GL',
            'country' => 'Greenland',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'DKK',
            'default_time_zoneid' => '101'
        ),
        array (
            'country_code' => 'GM',
            'country' => 'Gambia',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'GMD',
            'default_time_zoneid' => '9'
        ),
        array (
            'country_code' => 'GN',
            'country' => 'Guinea',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'GNF',
            'default_time_zoneid' => '17'
        ),
        array (
            'country_code' => 'GP',
            'country' => 'Guadeloupe',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '105'
        ),
        array (
            'country_code' => 'GQ',
            'country' => 'Equatorial Guinea',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'XAF',
            'default_time_zoneid' => '37'
        ),
        array (
            'country_code' => 'GR',
            'country' => 'Greece',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '296'
        ),
        array (
            'country_code' => 'GS',
            'country' => 'South Georgia and the South Sandwich Islands',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'GBP',
            'default_time_zoneid' => '276'
        ),
        array (
            'country_code' => 'GT',
            'country' => 'Guatemala',
            'continent_code' => 'CA',
            'continent' => 'Central America',
            'default_currency' => 'GTQ',
            'default_time_zoneid' => '106'
        ),
        array (
            'country_code' => 'GU',
            'country' => 'Guam',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'USD',
            'default_time_zoneid' => '364'
        ),
        array (
            'country_code' => 'GW',
            'country' => 'Guinea-Bissau',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'XOF',
            'default_time_zoneid' => '10'
        ),
        array (
            'country_code' => 'GY',
            'country' => 'Guyana',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'GYD',
            'default_time_zoneid' => '108'
        ),
        array (
            'country_code' => 'HK',
            'country' => 'Hong Kong',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'HKD',
            'default_time_zoneid' => '219'
        ),
        array (
            'country_code' => 'HM',
            'country' => 'Heard Island and McDonald Islands',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'AUD',
            'default_time_zoneid' => NULL
        ),
        array (
            'country_code' => 'HN',
            'country' => 'Honduras',
            'continent_code' => 'CA',
            'continent' => 'Central America',
            'default_currency' => 'HNL',
            'default_time_zoneid' => '174'
        ),
        array (
            'country_code' => 'HR',
            'country' => 'Croatia',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'HRK',
            'default_time_zoneid' => '435'
        ),
        array (
            'country_code' => 'HT',
            'country' => 'Haiti',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'HTG',
            'default_time_zoneid' => '154'
        ),
        array (
            'country_code' => 'HU',
            'country' => 'Hungary',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'HUF',
            'default_time_zoneid' => '301'
        ),
        array (
            'country_code' => 'ID',
            'country' => 'Indonesia',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'IDR',
            'default_time_zoneid' => '222'
        ),
        array (
            'country_code' => 'IE',
            'country' => 'Ireland',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '304'
        ),
        array (
            'country_code' => 'IL',
            'country' => 'Israel',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'ILS',
            'default_time_zoneid' => '224'
        ),
        array (
            'country_code' => 'IM',
            'country' => 'Isle of Man',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'GBP',
            'default_time_zoneid' => '424'
        ),
        array (
            'country_code' => 'IN',
            'country' => 'India',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'INR',
            'default_time_zoneid' => '415'
        ),
        array (
            'country_code' => 'IO',
            'country' => 'British Indian Ocean Territory',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'USD',
            'default_time_zoneid' => '339'
        ),
        array (
            'country_code' => 'IQ',
            'country' => 'Iraq',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'IQD',
            'default_time_zoneid' => '201'
        ),
        array (
            'country_code' => 'IR',
            'country' => 'Iran, Islamic Republic of Iran',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'IRR',
            'default_time_zoneid' => '259'
        ),
        array (
            'country_code' => 'IS',
            'country' => 'Iceland',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'ISK',
            'default_time_zoneid' => '275'
        ),
        array (
            'country_code' => 'IT',
            'country' => 'Italy',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '322'
        ),
        array (
            'country_code' => 'JE',
            'country' => 'Jersey',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'GBP',
            'default_time_zoneid' => '425'
        ),
        array (
            'country_code' => 'JM',
            'country' => 'Jamaica',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'JMD',
            'default_time_zoneid' => '122'
        ),
        array (
            'country_code' => 'JO',
            'country' => 'Jordan',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'JOD',
            'default_time_zoneid' => '196'
        ),
        array (
            'country_code' => 'JP',
            'country' => 'Japan',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'JPY',
            'default_time_zoneid' => '261'
        ),
        array (
            'country_code' => 'KE',
            'country' => 'Kenya',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'KES',
            'default_time_zoneid' => '43'
        ),
        array (
            'country_code' => 'KG',
            'country' => 'Kyrgyzstan',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'KGS',
            'default_time_zoneid' => '206'
        ),
        array (
            'country_code' => 'KH',
            'country' => 'Cambodia',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'KHR',
            'default_time_zoneid' => '243'
        ),
        array (
            'country_code' => 'KI',
            'country' => 'Kiribati',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'AUD',
            'default_time_zoneid' => '385'
        ),
        array (
            'country_code' => 'KM',
            'country' => 'Comoros',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'KMF',
            'default_time_zoneid' => '342'
        ),
        array (
            'country_code' => 'KN',
            'country' => 'Saint Kitts and Nevis',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'XCD',
            'default_time_zoneid' => '169'
        ),
        array (
            'country_code' => 'KP',
            'country' => 'Korea, Democratic People\'s Republic of Korea',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'KPW',
            'default_time_zoneid' => '245'
        ),
        array (
            'country_code' => 'KR',
            'country' => 'Korea, Republic of Korea',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'KRW',
            'default_time_zoneid' => '253'
        ),
        array (
            'country_code' => 'KW',
            'country' => 'Kuwait',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'KWD',
            'default_time_zoneid' => '233'
        ),
        array (
            'country_code' => 'KY',
            'country' => 'Cayman Islands',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'KYD',
            'default_time_zoneid' => '84'
        ),
        array (
            'country_code' => 'KZ',
            'country' => 'Kazakhstan',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'KZT',
            'default_time_zoneid' => '195'
        ),
        array (
            'country_code' => 'LA',
            'country' => 'Lao People\'s Democratic Republic',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'LAK',
            'default_time_zoneid' => '264'
        ),
        array (
            'country_code' => 'LB',
            'country' => 'Lebanon',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'LBP',
            'default_time_zoneid' => '205'
        ),
        array (
            'country_code' => 'LC',
            'country' => 'Saint Lucia',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'XCD',
            'default_time_zoneid' => '170'
        ),
        array (
            'country_code' => 'LI',
            'country' => 'Liechtenstein',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'CHF',
            'default_time_zoneid' => '330'
        ),
        array (
            'country_code' => 'LK',
            'country' => 'Sri Lanka',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'LKR',
            'default_time_zoneid' => '211'
        ),
        array (
            'country_code' => 'LR',
            'country' => 'Liberia',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'LRD',
            'default_time_zoneid' => '42'
        ),
        array (
            'country_code' => 'LS',
            'country' => 'Lesotho',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'LSL',
            'default_time_zoneid' => '39'
        ),
        array (
            'country_code' => 'LT',
            'country' => 'Lithuania',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'LTL',
            'default_time_zoneid' => '332'
        ),
        array (
            'country_code' => 'LU',
            'country' => 'Luxembourg',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '312'
        ),
        array (
            'country_code' => 'LV',
            'country' => 'Latvia',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'LVL',
            'default_time_zoneid' => '321'
        ),
        array (
            'country_code' => 'LY',
            'country' => 'Libyan Arab Jamahiriya',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'LYD',
            'default_time_zoneid' => '50'
        ),
        array (
            'country_code' => 'MA',
            'country' => 'Morocco',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'MAD',
            'default_time_zoneid' => '15'
        ),
        array (
            'country_code' => 'MC',
            'country' => 'Monaco',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '316'
        ),
        array (
            'country_code' => 'MD',
            'country' => 'Moldova, Republic of Moldova',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'MDL',
            'default_time_zoneid' => '302'
        ),
        array (
            'country_code' => 'ME',
            'country' => 'Montenegro',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '429'
        ),
        array (
            'country_code' => 'MG',
            'country' => 'Madagascar',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'MGA',
            'default_time_zoneid' => '338'
        ),
        array (
            'country_code' => 'MH',
            'country' => 'Marshall Islands',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'USD',
            'default_time_zoneid' => '370'
        ),
        array (
            'country_code' => 'MK',
            'country' => 'Macedonia',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'MKD',
            'default_time_zoneid' => '432'
        ),
        array (
            'country_code' => 'ML',
            'country' => 'Mali',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'XOF',
            'default_time_zoneid' => '7'
        ),
        array (
            'country_code' => 'MM',
            'country' => 'Myanmar',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'MMK',
            'default_time_zoneid' => '248'
        ),
        array (
            'country_code' => 'MN',
            'country' => 'Mongolia',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'MNT',
            'default_time_zoneid' => '262'
        ),
        array (
            'country_code' => 'MO',
            'country' => 'Macao',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'MOP',
            'default_time_zoneid' => '234'
        ),
        array (
            'country_code' => 'MP',
            'country' => 'Northern Mariana Islands',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'USD',
            'default_time_zoneid' => '383'
        ),
        array (
            'country_code' => 'MQ',
            'country' => 'Martinique',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '132'
        ),
        array (
            'country_code' => 'MR',
            'country' => 'Mauritania',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'MRO',
            'default_time_zoneid' => '46'
        ),
        array (
            'country_code' => 'MS',
            'country' => 'Montserrat',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'XCD',
            'default_time_zoneid' => '142'
        ),
        array (
            'country_code' => 'MT',
            'country' => 'Malta',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'MTL',
            'default_time_zoneid' => '314'
        ),
        array (
            'country_code' => 'MU',
            'country' => 'Mauritius',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'MUR',
            'default_time_zoneid' => '346'
        ),
        array (
            'country_code' => 'MV',
            'country' => 'Maldives',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'MVR',
            'default_time_zoneid' => '345'
        ),
        array (
            'country_code' => 'MW',
            'country' => 'Malawi',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'MWK',
            'default_time_zoneid' => '11'
        ),
        array (
            'country_code' => 'MX',
            'country' => 'Mexico',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'MXN',
            'default_time_zoneid' => '136'
        ),
        array (
            'country_code' => 'MY',
            'country' => 'Malaysia',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'MYR',
            'default_time_zoneid' => '231'
        ),
        array (
            'country_code' => 'MZ',
            'country' => 'Mozambique',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'MZN',
            'default_time_zoneid' => '38'
        ),
        array (
            'country_code' => 'NA',
            'country' => 'Namibia',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'NAD',
            'default_time_zoneid' => '52'
        ),
        array (
            'country_code' => 'NC',
            'country' => 'New Caledonia',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'XPF',
            'default_time_zoneid' => '376'
        ),
        array (
            'country_code' => 'NE',
            'country' => 'Niger',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'XOF',
            'default_time_zoneid' => '45'
        ),
        array (
            'country_code' => 'NF',
            'country' => 'Norfolk Island',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'AUD',
            'default_time_zoneid' => '375'
        ),
        array (
            'country_code' => 'NG',
            'country' => 'Nigeria',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'NGN',
            'default_time_zoneid' => '31'
        ),
        array (
            'country_code' => 'NI',
            'country' => 'Nicaragua',
            'continent_code' => 'CA',
            'continent' => 'Central America',
            'default_currency' => 'NIO',
            'default_time_zoneid' => '130'
        ),
        array (
            'country_code' => 'NL',
            'country' => 'Netherlands',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '294'
        ),
        array (
            'country_code' => 'NO',
            'country' => 'Norway',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'NOK',
            'default_time_zoneid' => '318'
        ),
        array (
            'country_code' => 'NP',
            'country' => 'Nepal',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'NPR',
            'default_time_zoneid' => '413'
        ),
        array (
            'country_code' => 'NR',
            'country' => 'Nauru',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'AUD',
            'default_time_zoneid' => '373'
        ),
        array (
            'country_code' => 'NU',
            'country' => 'Niue',
            'continent_code' => 'CA',
            'continent' => 'Central America',
            'default_currency' => 'NZD',
            'default_time_zoneid' => '374'
        ),
        array (
            'country_code' => 'NZ',
            'country' => 'New Zealand',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'NZD',
            'default_time_zoneid' => '353'
        ),
        array (
            'country_code' => 'OM',
            'country' => 'Oman',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'OMR',
            'default_time_zoneid' => '238'
        ),
        array (
            'country_code' => 'PA',
            'country' => 'Panama',
            'continent_code' => 'CA',
            'continent' => 'Central America',
            'default_currency' => 'PAB',
            'default_time_zoneid' => '150'
        ),
        array (
            'country_code' => 'PE',
            'country' => 'Peru',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'PEN',
            'default_time_zoneid' => '127'
        ),
        array (
            'country_code' => 'PF',
            'country' => 'French Polynesia',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'XPF',
            'default_time_zoneid' => '384'
        ),
        array (
            'country_code' => 'PG',
            'country' => 'Papua New Guinea',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'PGK',
            'default_time_zoneid' => '381'
        ),
        array (
            'country_code' => 'PH',
            'country' => 'Philippines',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'PHP',
            'default_time_zoneid' => '237'
        ),
        array (
            'country_code' => 'PK',
            'country' => 'Pakistan',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'PKR',
            'default_time_zoneid' => '227'
        ),
        array (
            'country_code' => 'PL',
            'country' => 'Poland',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'PLN',
            'default_time_zoneid' => '334'
        ),
        array (
            'country_code' => 'PM',
            'country' => 'Saint Pierre and Miquelon',
            'continent_code' => 'CA',
            'continent' => 'Central America',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '137'
        ),
        array (
            'country_code' => 'PN',
            'country' => 'Pitcairn',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'NZD',
            'default_time_zoneid' => '379'
        ),
        array (
            'country_code' => 'PR',
            'country' => 'Puerto Rico',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'USD',
            'default_time_zoneid' => '157'
        ),
        array (
            'country_code' => 'PS',
            'country' => 'Palestinian Territory',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'JOD',
            'default_time_zoneid' => '217'
        ),
        array (
            'country_code' => 'PT',
            'country' => 'Portugal',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '310'
        ),
        array (
            'country_code' => 'PW',
            'country' => 'Palau',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'USD',
            'default_time_zoneid' => '378'
        ),
        array (
            'country_code' => 'PY',
            'country' => 'Paraguay',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'PYG',
            'default_time_zoneid' => '69'
        ),
        array (
            'country_code' => 'QA',
            'country' => 'Qatar',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'QAR',
            'default_time_zoneid' => '246'
        ),
        array (
            'country_code' => 'RE',
            'country' => 'Reunion',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '348'
        ),
        array (
            'country_code' => 'RO',
            'country' => 'Romania',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'RON',
            'default_time_zoneid' => '300'
        ),
        array (
            'country_code' => 'RS',
            'country' => 'Serbia',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'RSD',
            'default_time_zoneid' => '297'
        ),
        array (
            'country_code' => 'RU',
            'country' => 'Russian Federation',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'RUB',
            'default_time_zoneid' => '317'
        ),
        array (
            'country_code' => 'RW',
            'country' => 'Rwanda',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'RWF',
            'default_time_zoneid' => '29'
        ),
        array (
            'country_code' => 'SA',
            'country' => 'Saudi Arabia',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'SAR',
            'default_time_zoneid' => '249'
        ),
        array (
            'country_code' => 'SB',
            'country' => 'Solomon Islands',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'SBD',
            'default_time_zoneid' => '363'
        ),
        array (
            'country_code' => 'SC',
            'country' => 'Seychelles',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'SCR',
            'default_time_zoneid' => '344'
        ),
        array (
            'country_code' => 'SD',
            'country' => 'Sudan',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'SDG',
            'default_time_zoneid' => '28'
        ),
        array (
            'country_code' => 'SE',
            'country' => 'Sweden',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'SEK',
            'default_time_zoneid' => '326'
        ),
        array (
            'country_code' => 'SG',
            'country' => 'Singapore',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'SGD',
            'default_time_zoneid' => '255'
        ),
        array (
            'country_code' => 'SH',
            'country' => 'Saint Helena',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'GBP',
            'default_time_zoneid' => '277'
        ),
        array (
            'country_code' => 'SI',
            'country' => 'Slovenia',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '427'
        ),
        array (
            'country_code' => 'SJ',
            'country' => 'Svalbard and Jan Mayen',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'NOK',
            'default_time_zoneid' => '408'
        ),
        array (
            'country_code' => 'SK',
            'country' => 'Slovakia',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'SKK',
            'default_time_zoneid' => '421'
        ),
        array (
            'country_code' => 'SL',
            'country' => 'Sierra Leone',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'SLL',
            'default_time_zoneid' => '23'
        ),
        array (
            'country_code' => 'SM',
            'country' => 'San Marino',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '430'
        ),
        array (
            'country_code' => 'SN',
            'country' => 'Senegal',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'XOF',
            'default_time_zoneid' => '18'
        ),
        array (
            'country_code' => 'SO',
            'country' => 'Somalia',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'SOS',
            'default_time_zoneid' => '41'
        ),
        array (
            'country_code' => 'SR',
            'country' => 'Suriname',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'SRD',
            'default_time_zoneid' => '152'
        ),
        array (
            'country_code' => 'ST',
            'country' => 'Sao Tome and Principe',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'STD',
            'default_time_zoneid' => '49'
        ),
        array (
            'country_code' => 'SV',
            'country' => 'El Salvador',
            'continent_code' => 'CA',
            'continent' => 'Central America',
            'default_currency' => 'SVC',
            'default_time_zoneid' => '98'
        ),
        array (
            'country_code' => 'SY',
            'country' => 'Syrian Arab Republic',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'SYP',
            'default_time_zoneid' => '212'
        ),
        array (
            'country_code' => 'SZ',
            'country' => 'Swaziland',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'SZL',
            'default_time_zoneid' => '40'
        ),
        array (
            'country_code' => 'TC',
            'country' => 'Turks and Caicos Islands',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'USD',
            'default_time_zoneid' => '103'
        ),
        array (
            'country_code' => 'TD',
            'country' => 'Chad',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'XAF',
            'default_time_zoneid' => '44'
        ),
        array (
            'country_code' => 'TF',
            'country' => 'French Southern Territories',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '343'
        ),
        array (
            'country_code' => 'TG',
            'country' => 'Togo',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'XOF',
            'default_time_zoneid' => '33'
        ),
        array (
            'country_code' => 'TH',
            'country' => 'Thailand',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'THB',
            'default_time_zoneid' => '204'
        ),
        array (
            'country_code' => 'TJ',
            'country' => 'Tajikistan',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'TJS',
            'default_time_zoneid' => '216'
        ),
        array (
            'country_code' => 'TK',
            'country' => 'Tokelau',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'NZD',
            'default_time_zoneid' => '358'
        ),
        array (
            'country_code' => 'TL',
            'country' => 'Timor-Leste',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'USD',
            'default_time_zoneid' => '214'
        ),
        array (
            'country_code' => 'TM',
            'country' => 'Turkmenistan',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'TMT',
            'default_time_zoneid' => '200'
        ),
        array (
            'country_code' => 'TN',
            'country' => 'Tunisia',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'TND',
            'default_time_zoneid' => '51'
        ),
        array (
            'country_code' => 'TO',
            'country' => 'Tonga',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'TOP',
            'default_time_zoneid' => '386'
        ),
        array (
            'country_code' => 'TR',
            'country' => 'Turkey',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'TRY',
            'default_time_zoneid' => '307'
        ),
        array (
            'country_code' => 'TT',
            'country' => 'Trinidad and Tobago',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'TTD',
            'default_time_zoneid' => '155'
        ),
        array (
            'country_code' => 'TV',
            'country' => 'Tuvalu',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'AUD',
            'default_time_zoneid' => '360'
        ),
        array (
            'country_code' => 'TW',
            'country' => 'Taiwan',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'TWD',
            'default_time_zoneid' => '256'
        ),
        array (
            'country_code' => 'TZ',
            'country' => 'Tanzania, United Republic of Tanzania',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'TZS',
            'default_time_zoneid' => '19'
        ),
        array (
            'country_code' => 'UA',
            'country' => 'Ukraine',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'UAH',
            'default_time_zoneid' => '309'
        ),
        array (
            'country_code' => 'UG',
            'country' => 'Uganda',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'UGX',
            'default_time_zoneid' => '27'
        ),
        array (
            'country_code' => 'UM',
            'country' => 'United States Minor Outlying Islands',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'USD',
            'default_time_zoneid' => '372'
        ),
        array (
            'country_code' => 'US',
            'country' => 'United States',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'USD',
            'default_time_zoneid' => '85'
        ),
        array (
            'country_code' => 'UY',
            'country' => 'Uruguay',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'UYU',
            'default_time_zoneid' => '140'
        ),
        array (
            'country_code' => 'UZ',
            'country' => 'Uzbekistan',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'UZS',
            'default_time_zoneid' => '257'
        ),
        array (
            'country_code' => 'VA',
            'country' => 'Holy See (Vatican City State)',
            'continent_code' => 'EU',
            'continent' => 'Europe',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '434'
        ),
        array (
            'country_code' => 'VC',
            'country' => 'Saint Vincent and the Grenadines',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'XCD',
            'default_time_zoneid' => '172'
        ),
        array (
            'country_code' => 'VE',
            'country' => 'Venezuela',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'VEF',
            'default_time_zoneid' => '82'
        ),
        array (
            'country_code' => 'VG',
            'country' => 'Virgin Islands, British',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'USD',
            'default_time_zoneid' => '179'
        ),
        array (
            'country_code' => 'VI',
            'country' => 'Virgin Islands, U.S.',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'USD',
            'default_time_zoneid' => '171'
        ),
        array (
            'country_code' => 'VN',
            'country' => 'Vietnam',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'VND',
            'default_time_zoneid' => '412'
        ),
        array (
            'country_code' => 'VU',
            'country' => 'Vanuatu',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'VUV',
            'default_time_zoneid' => '356'
        ),
        array (
            'country_code' => 'WF',
            'country' => 'Wallis and Futuna',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'XPF',
            'default_time_zoneid' => '389'
        ),
        array (
            'country_code' => 'WS',
            'country' => 'Samoa',
            'continent_code' => 'OC',
            'continent' => 'Oceania',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '352'
        ),
        array (
            'country_code' => 'YE',
            'country' => 'Yemen',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'YER',
            'default_time_zoneid' => '194'
        ),
        array (
            'country_code' => 'YT',
            'country' => 'Mayotte',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'EUR',
            'default_time_zoneid' => '347'
        ),
        array (
            'country_code' => 'ZA',
            'country' => 'South Africa',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'ZAR',
            'default_time_zoneid' => '26'
        ),
        array (
            'country_code' => 'ZM',
            'country' => 'Zambia',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'ZMK',
            'default_time_zoneid' => '36'
        ),
        array (
            'country_code' => 'ZW',
            'country' => 'Zimbabwe',
            'continent_code' => 'AF',
            'continent' => 'Africa',
            'default_currency' => 'ZWD',
            'default_time_zoneid' => '25'
        ),
        array (
            'country_code' => 'RU',
            'country' => 'Russian Federation',
            'continent_code' => 'AS',
            'continent' => 'Asia',
            'default_currency' => 'RUB',
            'default_time_zoneid' => '317'
        ),
        array (
            'country_code' => 'TR',
            'country' => 'Turkey',
            'continent_code' => 'ME',
            'continent' => 'Middle East',
            'default_currency' => 'TRY',
            'default_time_zoneid' => '307'
        ),
        array (
            'country_code' => 'CW',
            'country' => 'Curacao',
            'continent_code' => 'SA',
            'continent' => 'South America',
            'default_currency' => 'ANG',
            'default_time_zoneid' => '89'
        ),
        array (
            'country_code' => 'MF',
            'country' => 'Collectivity of Saint Martin',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'ANG',
            'default_time_zoneid' => '398'
        ),
        array (
            'country_code' => 'SX',
            'country' => 'Sint Maarten',
            'continent_code' => 'NA',
            'continent' => 'North America',
            'default_currency' => 'ANG',
            'default_time_zoneid' => '397'
        )
    );

    public function run() {
	    GeoIpCountryModel::truncate();
	    
	    foreach ( $this->geoIpCountries as $cc ) {
	    	$ccm = new GeoIpCountryModel( $cc );
	    	$ccm->save();
	    }
    }
}
