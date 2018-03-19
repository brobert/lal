<?php
use Illuminate\Database\Seeder;
use App\Models\TimeZone as TimeZoneModel;


class TimeZoneSeeder extends Seeder
{

    private $timeZones = array(
        array(
            'id' => '2',
            'name' => 'Africa/Abidjan',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '3',
            'name' => 'Africa/Accra',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '4',
            'name' => 'Africa/Addis_Ababa',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '5',
            'name' => 'Africa/Algiers',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '6',
            'name' => 'Africa/Asmara',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '7',
            'name' => 'Africa/Bamako',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '8',
            'name' => 'Africa/Bangui',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '9',
            'name' => 'Africa/Banjul',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '10',
            'name' => 'Africa/Bissau',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '11',
            'name' => 'Africa/Blantyre',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '12',
            'name' => 'Africa/Brazzaville',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '13',
            'name' => 'Africa/Bujumbura',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '14',
            'name' => 'Africa/Cairo',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '15',
            'name' => 'Africa/Casablanca',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '16',
            'name' => 'Africa/Ceuta',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '17',
            'name' => 'Africa/Conakry',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '18',
            'name' => 'Africa/Dakar',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '19',
            'name' => 'Africa/Dar_es_Salaam',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '20',
            'name' => 'Africa/Djibouti',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '21',
            'name' => 'Africa/Douala',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '22',
            'name' => 'Africa/El_Aaiun',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '23',
            'name' => 'Africa/Freetown',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '24',
            'name' => 'Africa/Gaborone',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '25',
            'name' => 'Africa/Harare',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '26',
            'name' => 'Africa/Johannesburg',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '27',
            'name' => 'Africa/Kampala',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '28',
            'name' => 'Africa/Khartoum',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '29',
            'name' => 'Africa/Kigali',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '30',
            'name' => 'Africa/Kinshasa',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '31',
            'name' => 'Africa/Lagos',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '32',
            'name' => 'Africa/Libreville',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '33',
            'name' => 'Africa/Lome',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '34',
            'name' => 'Africa/Luanda',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '35',
            'name' => 'Africa/Lubumbashi',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '36',
            'name' => 'Africa/Lusaka',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '37',
            'name' => 'Africa/Malabo',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '38',
            'name' => 'Africa/Maputo',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '39',
            'name' => 'Africa/Maseru',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '40',
            'name' => 'Africa/Mbabane',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '41',
            'name' => 'Africa/Mogadishu',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '42',
            'name' => 'Africa/Monrovia',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '43',
            'name' => 'Africa/Nairobi',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '44',
            'name' => 'Africa/Ndjamena',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '45',
            'name' => 'Africa/Niamey',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '46',
            'name' => 'Africa/Nouakchott',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '47',
            'name' => 'Africa/Ouagadougou',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '48',
            'name' => 'Africa/Porto-Novo',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '49',
            'name' => 'Africa/Sao_Tome',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '50',
            'name' => 'Africa/Tripoli',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '51',
            'name' => 'Africa/Tunis',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '52',
            'name' => 'Africa/Windhoek',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '53',
            'name' => 'America/Adak',
            'offset_to_CET' => '-11',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '54',
            'name' => 'America/Anchorage',
            'offset_to_CET' => '-10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '55',
            'name' => 'America/Anguilla',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '56',
            'name' => 'America/Antigua',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '57',
            'name' => 'America/Araguaina',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '58',
            'name' => 'America/Argentina/Buenos_Aires',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '59',
            'name' => 'America/Argentina/Catamarca',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '60',
            'name' => 'America/Argentina/Cordoba',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '61',
            'name' => 'America/Argentina/Jujuy',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '62',
            'name' => 'America/Argentina/La_Rioja',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '63',
            'name' => 'America/Argentina/Mendoza',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '64',
            'name' => 'America/Argentina/Rio_Gallegos',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '65',
            'name' => 'America/Argentina/San_Juan',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '66',
            'name' => 'America/Argentina/Tucuman',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '67',
            'name' => 'America/Argentina/Ushuaia',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '68',
            'name' => 'America/Aruba',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '69',
            'name' => 'America/Asuncion',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '70',
            'name' => 'America/Atikokan',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '71',
            'name' => 'America/Bahia',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '72',
            'name' => 'America/Barbados',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '73',
            'name' => 'America/Belem',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '74',
            'name' => 'America/Belize',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '75',
            'name' => 'America/Blanc-Sablon',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '76',
            'name' => 'America/Boa_Vista',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '77',
            'name' => 'America/Bogota',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '78',
            'name' => 'America/Boise',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '79',
            'name' => 'America/Cambridge_Bay',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '80',
            'name' => 'America/Campo_Grande',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '81',
            'name' => 'America/Cancun',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '82',
            'name' => 'America/Caracas',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '83',
            'name' => 'America/Cayenne',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '84',
            'name' => 'America/Cayman',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '85',
            'name' => 'America/Chicago',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '86',
            'name' => 'America/Chihuahua',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '87',
            'name' => 'America/Costa_Rica',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '88',
            'name' => 'America/Cuiaba',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '89',
            'name' => 'America/Curacao',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '90',
            'name' => 'America/Danmarkshavn',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '91',
            'name' => 'America/Dawson',
            'offset_to_CET' => '-9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '92',
            'name' => 'America/Dawson_Creek',
            'offset_to_CET' => '-9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '93',
            'name' => 'America/Denver',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '94',
            'name' => 'America/Detroit',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '95',
            'name' => 'America/Dominica',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '96',
            'name' => 'America/Edmonton',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '97',
            'name' => 'America/Eirunepe',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '98',
            'name' => 'America/El_Salvador',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '99',
            'name' => 'America/Fortaleza',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '100',
            'name' => 'America/Glace_Bay',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '101',
            'name' => 'America/Godthab',
            'offset_to_CET' => '-4',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '102',
            'name' => 'America/Goose_Bay',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '103',
            'name' => 'America/Grand_Turk',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '104',
            'name' => 'America/Grenada',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '105',
            'name' => 'America/Guadeloupe',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '106',
            'name' => 'America/Guatemala',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '107',
            'name' => 'America/Guayaquil',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '108',
            'name' => 'America/Guyana',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '109',
            'name' => 'America/Halifax',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '110',
            'name' => 'America/Havana',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '111',
            'name' => 'America/Hermosillo',
            'offset_to_CET' => '-9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '112',
            'name' => 'America/Indiana/Indianapolis',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '113',
            'name' => 'America/Indiana/Knox',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '114',
            'name' => 'America/Indiana/Marengo',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '115',
            'name' => 'America/Indiana/Petersburg',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '116',
            'name' => 'America/Indiana/Tell_City',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '117',
            'name' => 'America/Indiana/Vevay',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '118',
            'name' => 'America/Indiana/Vincennes',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '119',
            'name' => 'America/Indiana/Winamac',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '120',
            'name' => 'America/Inuvik',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '121',
            'name' => 'America/Iqaluit',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '122',
            'name' => 'America/Jamaica',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '123',
            'name' => 'America/Juneau',
            'offset_to_CET' => '-10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '124',
            'name' => 'America/Kentucky/Louisville',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '125',
            'name' => 'America/Kentucky/Monticello',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '126',
            'name' => 'America/La_Paz',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '127',
            'name' => 'America/Lima',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '128',
            'name' => 'America/Los_Angeles',
            'offset_to_CET' => '-9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '129',
            'name' => 'America/Maceio',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '130',
            'name' => 'America/Managua',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '131',
            'name' => 'America/Manaus',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '132',
            'name' => 'America/Martinique',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '133',
            'name' => 'America/Mazatlan',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '134',
            'name' => 'America/Menominee',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '135',
            'name' => 'America/Merida',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '136',
            'name' => 'America/Mexico_City',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '137',
            'name' => 'America/Miquelon',
            'offset_to_CET' => '-4',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '138',
            'name' => 'America/Moncton',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '139',
            'name' => 'America/Monterrey',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '140',
            'name' => 'America/Montevideo',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '141',
            'name' => 'America/Montreal',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '142',
            'name' => 'America/Montserrat',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '143',
            'name' => 'America/Nassau',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '144',
            'name' => 'America/New_York',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '145',
            'name' => 'America/Nipigon',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '146',
            'name' => 'America/Nome',
            'offset_to_CET' => '-10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '147',
            'name' => 'America/Noronha',
            'offset_to_CET' => '-4',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '148',
            'name' => 'America/North_Dakota/Center',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '149',
            'name' => 'America/North_Dakota/New_Salem',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '150',
            'name' => 'America/Panama',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '151',
            'name' => 'America/Pangnirtung',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '152',
            'name' => 'America/Paramaribo',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '153',
            'name' => 'America/Phoenix',
            'offset_to_CET' => '-9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '154',
            'name' => 'America/Port-au-Prince',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '155',
            'name' => 'America/Port_of_Spain',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '156',
            'name' => 'America/Porto_Velho',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '157',
            'name' => 'America/Puerto_Rico',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '158',
            'name' => 'America/Rainy_River',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '159',
            'name' => 'America/Rankin_Inlet',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '160',
            'name' => 'America/Recife',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '161',
            'name' => 'America/Regina',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '162',
            'name' => 'America/Resolute',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '163',
            'name' => 'America/Rio_Branco',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '164',
            'name' => 'America/Santiago',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '165',
            'name' => 'America/Santo_Domingo',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '166',
            'name' => 'America/Sao_Paulo',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '167',
            'name' => 'America/Scoresbysund',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '168',
            'name' => 'America/St_Johns',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '169',
            'name' => 'America/St_Kitts',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '170',
            'name' => 'America/St_Lucia',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '171',
            'name' => 'America/St_Thomas',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '172',
            'name' => 'America/St_Vincent',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '173',
            'name' => 'America/Swift_Current',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '174',
            'name' => 'America/Tegucigalpa',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '175',
            'name' => 'America/Thule',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '176',
            'name' => 'America/Thunder_Bay',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '177',
            'name' => 'America/Tijuana',
            'offset_to_CET' => '-9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '178',
            'name' => 'America/Toronto',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '179',
            'name' => 'America/Tortola',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '180',
            'name' => 'America/Vancouver',
            'offset_to_CET' => '-9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '181',
            'name' => 'America/Whitehorse',
            'offset_to_CET' => '-9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '182',
            'name' => 'America/Winnipeg',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '183',
            'name' => 'America/Yakutat',
            'offset_to_CET' => '-10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '184',
            'name' => 'America/Yellowknife',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '185',
            'name' => 'Antarctica/Casey',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '186',
            'name' => 'Antarctica/Davis',
            'offset_to_CET' => '5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '187',
            'name' => 'Antarctica/DumontDUrville',
            'offset_to_CET' => '8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '188',
            'name' => 'Antarctica/Mawson',
            'offset_to_CET' => '4',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '189',
            'name' => 'Antarctica/McMurdo',
            'offset_to_CET' => '10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '190',
            'name' => 'Antarctica/Palmer',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '191',
            'name' => 'Antarctica/Rothera',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '192',
            'name' => 'Antarctica/Syowa',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '193',
            'name' => 'Antarctica/Vostok',
            'offset_to_CET' => '4',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '194',
            'name' => 'Asia/Aden',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '195',
            'name' => 'Asia/Almaty',
            'offset_to_CET' => '4',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '196',
            'name' => 'Asia/Amman',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '197',
            'name' => 'Asia/Anadyr',
            'offset_to_CET' => '11',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '198',
            'name' => 'Asia/Aqtau',
            'offset_to_CET' => '3',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '199',
            'name' => 'Asia/Aqtobe',
            'offset_to_CET' => '3',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '200',
            'name' => 'Asia/Ashgabat',
            'offset_to_CET' => '3',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '201',
            'name' => 'Asia/Baghdad',
            'offset_to_CET' => '2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '202',
            'name' => 'Asia/Bahrain',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '203',
            'name' => 'Asia/Baku',
            'offset_to_CET' => '3',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '204',
            'name' => 'Asia/Bangkok',
            'offset_to_CET' => '5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '205',
            'name' => 'Asia/Beirut',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '206',
            'name' => 'Asia/Bishkek',
            'offset_to_CET' => '4',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '207',
            'name' => 'Asia/Brunei',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '208',
            'name' => 'Asia/Calcutta',
            'offset_to_CET' => '4',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '209',
            'name' => 'Asia/Choibalsan',
            'offset_to_CET' => '7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '210',
            'name' => 'Asia/Chongqing',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '211',
            'name' => 'Asia/Colombo',
            'offset_to_CET' => '4',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '212',
            'name' => 'Asia/Damascus',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '213',
            'name' => 'Asia/Dhaka',
            'offset_to_CET' => '4',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '214',
            'name' => 'Asia/Dili',
            'offset_to_CET' => '7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '215',
            'name' => 'Asia/Dubai',
            'offset_to_CET' => '2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '216',
            'name' => 'Asia/Dushanbe',
            'offset_to_CET' => '3',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '217',
            'name' => 'Asia/Gaza',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '218',
            'name' => 'Asia/Harbin',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '219',
            'name' => 'Asia/Hong_Kong',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '220',
            'name' => 'Asia/Hovd',
            'offset_to_CET' => '5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '221',
            'name' => 'Asia/Irkutsk',
            'offset_to_CET' => '7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '222',
            'name' => 'Asia/Jakarta',
            'offset_to_CET' => '5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '223',
            'name' => 'Asia/Jayapura',
            'offset_to_CET' => '7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '224',
            'name' => 'Asia/Jerusalem',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '225',
            'name' => 'Asia/Kabul',
            'offset_to_CET' => '3',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '226',
            'name' => 'Asia/Kamchatka',
            'offset_to_CET' => '11',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '227',
            'name' => 'Asia/Karachi',
            'offset_to_CET' => '3',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '228',
            'name' => 'Asia/Kashgar',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '229',
            'name' => 'Asia/Katmandu',
            'offset_to_CET' => '4',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '230',
            'name' => 'Asia/Krasnoyarsk',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '231',
            'name' => 'Asia/Kuala_Lumpur',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '232',
            'name' => 'Asia/Kuching',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '233',
            'name' => 'Asia/Kuwait',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '234',
            'name' => 'Asia/Macau',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '235',
            'name' => 'Asia/Magadan',
            'offset_to_CET' => '10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '236',
            'name' => 'Asia/Makassar',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '237',
            'name' => 'Asia/Manila',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '238',
            'name' => 'Asia/Muscat',
            'offset_to_CET' => '2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '239',
            'name' => 'Asia/Nicosia',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '240',
            'name' => 'Asia/Novosibirsk',
            'offset_to_CET' => '5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '241',
            'name' => 'Asia/Omsk',
            'offset_to_CET' => '5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '242',
            'name' => 'Asia/Oral',
            'offset_to_CET' => '3',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '243',
            'name' => 'Asia/Phnom_Penh',
            'offset_to_CET' => '5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '244',
            'name' => 'Asia/Pontianak',
            'offset_to_CET' => '5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '245',
            'name' => 'Asia/Pyongyang',
            'offset_to_CET' => '7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '246',
            'name' => 'Asia/Qatar',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '247',
            'name' => 'Asia/Qyzylorda',
            'offset_to_CET' => '4',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '248',
            'name' => 'Asia/Rangoon',
            'offset_to_CET' => '5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '249',
            'name' => 'Asia/Riyadh',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '250',
            'name' => 'Asia/Saigon',
            'offset_to_CET' => '5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '251',
            'name' => 'Asia/Sakhalin',
            'offset_to_CET' => '9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '252',
            'name' => 'Asia/Samarkand',
            'offset_to_CET' => '3',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '253',
            'name' => 'Asia/Seoul',
            'offset_to_CET' => '7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '254',
            'name' => 'Asia/Shanghai',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '255',
            'name' => 'Asia/Singapore',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '256',
            'name' => 'Asia/Taipei',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '257',
            'name' => 'Asia/Tashkent',
            'offset_to_CET' => '3',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '258',
            'name' => 'Asia/Tbilisi',
            'offset_to_CET' => '2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '259',
            'name' => 'Asia/Tehran',
            'offset_to_CET' => '3',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '260',
            'name' => 'Asia/Thimphu',
            'offset_to_CET' => '4',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '261',
            'name' => 'Asia/Tokyo',
            'offset_to_CET' => '7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '262',
            'name' => 'Asia/Ulaanbaatar',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '263',
            'name' => 'Asia/Urumqi',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '264',
            'name' => 'Asia/Vientiane',
            'offset_to_CET' => '5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '265',
            'name' => 'Asia/Vladivostok',
            'offset_to_CET' => '9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '266',
            'name' => 'Asia/Yakutsk',
            'offset_to_CET' => '8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '267',
            'name' => 'Asia/Yekaterinburg',
            'offset_to_CET' => '4',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '268',
            'name' => 'Asia/Yerevan',
            'offset_to_CET' => '3',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '269',
            'name' => 'Atlantic/Azores',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '270',
            'name' => 'Atlantic/Bermuda',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '271',
            'name' => 'Atlantic/Canary',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '272',
            'name' => 'Atlantic/Cape_Verde',
            'offset_to_CET' => '-3',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '273',
            'name' => 'Atlantic/Faroe',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '274',
            'name' => 'Atlantic/Madeira',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '275',
            'name' => 'Atlantic/Reykjavik',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '276',
            'name' => 'Atlantic/South_Georgia',
            'offset_to_CET' => '-4',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '277',
            'name' => 'Atlantic/St_Helena',
            'offset_to_CET' => '-2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '278',
            'name' => 'Atlantic/Stanley',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '279',
            'name' => 'Australia/Adelaide',
            'offset_to_CET' => '8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '280',
            'name' => 'Australia/Brisbane',
            'offset_to_CET' => '8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '281',
            'name' => 'Australia/Broken_Hill',
            'offset_to_CET' => '8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '282',
            'name' => 'Australia/Currie',
            'offset_to_CET' => '8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '283',
            'name' => 'Australia/Darwin',
            'offset_to_CET' => '8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '284',
            'name' => 'Australia/Eucla',
            'offset_to_CET' => '7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '285',
            'name' => 'Australia/Hobart',
            'offset_to_CET' => '8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '286',
            'name' => 'Australia/Lindeman',
            'offset_to_CET' => '8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '287',
            'name' => 'Australia/Lord_Howe',
            'offset_to_CET' => '9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '288',
            'name' => 'Australia/Melbourne',
            'offset_to_CET' => '8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '289',
            'name' => 'Australia/Perth',
            'offset_to_CET' => '6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '290',
            'name' => 'Australia/Sydney',
            'offset_to_CET' => '8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '291',
            'name' => 'CST6CDT',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '292',
            'name' => 'EST',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '293',
            'name' => 'EST5EDT',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '294',
            'name' => 'Europe/Amsterdam',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '295',
            'name' => 'Europe/Andorra',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '296',
            'name' => 'Europe/Athens',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '297',
            'name' => 'Europe/Belgrade',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '1',
            'name' => 'Europe/Berlin',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '299',
            'name' => 'Europe/Brussels',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '300',
            'name' => 'Europe/Bucharest',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '301',
            'name' => 'Europe/Budapest',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '302',
            'name' => 'Europe/Chisinau',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '303',
            'name' => 'Europe/Copenhagen',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '304',
            'name' => 'Europe/Dublin',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '305',
            'name' => 'Europe/Gibraltar',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '306',
            'name' => 'Europe/Helsinki',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '307',
            'name' => 'Europe/Istanbul',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '308',
            'name' => 'Europe/Kaliningrad',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '309',
            'name' => 'Europe/Kiev',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '310',
            'name' => 'Europe/Lisbon',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '311',
            'name' => 'Europe/London',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '312',
            'name' => 'Europe/Luxembourg',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '313',
            'name' => 'Europe/Madrid',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '314',
            'name' => 'Europe/Malta',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '315',
            'name' => 'Europe/Minsk',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '316',
            'name' => 'Europe/Monaco',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '317',
            'name' => 'Europe/Moscow',
            'offset_to_CET' => '2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '318',
            'name' => 'Europe/Oslo',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '319',
            'name' => 'Europe/Paris',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '320',
            'name' => 'Europe/Prague',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '321',
            'name' => 'Europe/Riga',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '322',
            'name' => 'Europe/Rome',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '323',
            'name' => 'Europe/Samara',
            'offset_to_CET' => '3',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '324',
            'name' => 'Europe/Simferopol',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '325',
            'name' => 'Europe/Sofia',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '326',
            'name' => 'Europe/Stockholm',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '327',
            'name' => 'Europe/Tallinn',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '328',
            'name' => 'Europe/Tirane',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '329',
            'name' => 'Europe/Uzhgorod',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '330',
            'name' => 'Europe/Vaduz',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '331',
            'name' => 'Europe/Vienna',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '332',
            'name' => 'Europe/Vilnius',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '333',
            'name' => 'Europe/Volgograd',
            'offset_to_CET' => '2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '334',
            'name' => 'Europe/Warsaw',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '335',
            'name' => 'Europe/Zaporozhye',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '336',
            'name' => 'Europe/Zurich',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '337',
            'name' => 'HST',
            'offset_to_CET' => '-12',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '338',
            'name' => 'Indian/Antananarivo',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '339',
            'name' => 'Indian/Chagos',
            'offset_to_CET' => '4',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '340',
            'name' => 'Indian/Christmas',
            'offset_to_CET' => '5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '341',
            'name' => 'Indian/Cocos',
            'offset_to_CET' => '5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '342',
            'name' => 'Indian/Comoro',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '343',
            'name' => 'Indian/Kerguelen',
            'offset_to_CET' => '3',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '344',
            'name' => 'Indian/Mahe',
            'offset_to_CET' => '2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '345',
            'name' => 'Indian/Maldives',
            'offset_to_CET' => '3',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '346',
            'name' => 'Indian/Mauritius',
            'offset_to_CET' => '2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '347',
            'name' => 'Indian/Mayotte',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '348',
            'name' => 'Indian/Reunion',
            'offset_to_CET' => '2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '349',
            'name' => 'MST',
            'offset_to_CET' => '-9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '350',
            'name' => 'MST7MDT',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '351',
            'name' => 'PST8PDT',
            'offset_to_CET' => '-9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '352',
            'name' => 'Pacific/Apia',
            'offset_to_CET' => '-13',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '353',
            'name' => 'Pacific/Auckland',
            'offset_to_CET' => '10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '354',
            'name' => 'Pacific/Chatham',
            'offset_to_CET' => '11',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '355',
            'name' => 'Pacific/Easter',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '356',
            'name' => 'Pacific/Efate',
            'offset_to_CET' => '9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '357',
            'name' => 'Pacific/Enderbury',
            'offset_to_CET' => '11',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '358',
            'name' => 'Pacific/Fakaofo',
            'offset_to_CET' => '-12',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '359',
            'name' => 'Pacific/Fiji',
            'offset_to_CET' => '10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '360',
            'name' => 'Pacific/Funafuti',
            'offset_to_CET' => '10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '361',
            'name' => 'Pacific/Galapagos',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '362',
            'name' => 'Pacific/Gambier',
            'offset_to_CET' => '-11',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '363',
            'name' => 'Pacific/Guadalcanal',
            'offset_to_CET' => '9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '364',
            'name' => 'Pacific/Guam',
            'offset_to_CET' => '8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '365',
            'name' => 'Pacific/Honolulu',
            'offset_to_CET' => '-12',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '366',
            'name' => 'Pacific/Johnston',
            'offset_to_CET' => '-12',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '367',
            'name' => 'Pacific/Kiritimati',
            'offset_to_CET' => '12',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '368',
            'name' => 'Pacific/Kosrae',
            'offset_to_CET' => '9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '369',
            'name' => 'Pacific/Kwajalein',
            'offset_to_CET' => '10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '370',
            'name' => 'Pacific/Majuro',
            'offset_to_CET' => '10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '371',
            'name' => 'Pacific/Marquesas',
            'offset_to_CET' => '-12',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '372',
            'name' => 'Pacific/Midway',
            'offset_to_CET' => '-13',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '373',
            'name' => 'Pacific/Nauru',
            'offset_to_CET' => '10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '374',
            'name' => 'Pacific/Niue',
            'offset_to_CET' => '-13',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '375',
            'name' => 'Pacific/Norfolk',
            'offset_to_CET' => '10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '376',
            'name' => 'Pacific/Noumea',
            'offset_to_CET' => '9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '377',
            'name' => 'Pacific/Pago_Pago',
            'offset_to_CET' => '-13',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '378',
            'name' => 'Pacific/Palau',
            'offset_to_CET' => '7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '379',
            'name' => 'Pacific/Pitcairn',
            'offset_to_CET' => '-10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '380',
            'name' => 'Pacific/Ponape',
            'offset_to_CET' => '9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '381',
            'name' => 'Pacific/Port_Moresby',
            'offset_to_CET' => '8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '382',
            'name' => 'Pacific/Rarotonga',
            'offset_to_CET' => '-12',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '383',
            'name' => 'Pacific/Saipan',
            'offset_to_CET' => '8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '384',
            'name' => 'Pacific/Tahiti',
            'offset_to_CET' => '-12',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '385',
            'name' => 'Pacific/Tarawa',
            'offset_to_CET' => '10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '386',
            'name' => 'Pacific/Tongatapu',
            'offset_to_CET' => '11',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '387',
            'name' => 'Pacific/Truk',
            'offset_to_CET' => '8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '388',
            'name' => 'Pacific/Wake',
            'offset_to_CET' => '10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '389',
            'name' => 'Pacific/Wallis',
            'offset_to_CET' => '10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '390',
            'name' => 'Africa/Juba',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '391',
            'name' => 'America/Argentina/Salta',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '392',
            'name' => 'America/Argentina/San_Luis',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '393',
            'name' => 'America/Bahia_Banderas',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '394',
            'name' => 'America/Creston',
            'offset_to_CET' => '-9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '395',
            'name' => 'America/Fort_Nelson',
            'offset_to_CET' => '-9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '396',
            'name' => 'America/Kralendijk',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '397',
            'name' => 'America/Lower_Princes',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '398',
            'name' => 'America/Marigot',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '399',
            'name' => 'America/Matamoros',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '400',
            'name' => 'America/Metlakatla',
            'offset_to_CET' => '-10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '401',
            'name' => 'America/North_Dakota/Beulah',
            'offset_to_CET' => '-7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '402',
            'name' => 'America/Ojinaga',
            'offset_to_CET' => '-8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '403',
            'name' => 'America/Santarem',
            'offset_to_CET' => '-5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '404',
            'name' => 'America/Sitka',
            'offset_to_CET' => '-10',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '405',
            'name' => 'America/St_Barthelemy',
            'offset_to_CET' => '-6',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '406',
            'name' => 'Antarctica/Macquarie',
            'offset_to_CET' => '9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '407',
            'name' => 'Antarctica/Troll',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '408',
            'name' => 'Arctic/Longyearbyen',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '409',
            'name' => 'Asia/Barnaul',
            'offset_to_CET' => '5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '410',
            'name' => 'Asia/Chita',
            'offset_to_CET' => '7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '411',
            'name' => 'Asia/Hebron',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '412',
            'name' => 'Asia/Ho_Chi_Minh',
            'offset_to_CET' => '5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '413',
            'name' => 'Asia/Kathmandu',
            'offset_to_CET' => '4',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '414',
            'name' => 'Asia/Khandyga',
            'offset_to_CET' => '7',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '415',
            'name' => 'Asia/Kolkata',
            'offset_to_CET' => '3',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '416',
            'name' => 'Asia/Novokuznetsk',
            'offset_to_CET' => '5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '417',
            'name' => 'Asia/Srednekolymsk',
            'offset_to_CET' => '9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '418',
            'name' => 'Asia/Tomsk',
            'offset_to_CET' => '5',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '419',
            'name' => 'Asia/Ust-Nera',
            'offset_to_CET' => '8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '420',
            'name' => 'Europe/Astrakhan',
            'offset_to_CET' => '2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '421',
            'name' => 'Europe/Bratislava',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '422',
            'name' => 'Europe/Busingen',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '423',
            'name' => 'Europe/Guernsey',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '424',
            'name' => 'Europe/Isle_of_Man',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '425',
            'name' => 'Europe/Jersey',
            'offset_to_CET' => '-1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '426',
            'name' => 'Europe/Kirov',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '427',
            'name' => 'Europe/Ljubljana',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '428',
            'name' => 'Europe/Mariehamn',
            'offset_to_CET' => '1',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '429',
            'name' => 'Europe/Podgorica',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '430',
            'name' => 'Europe/San_Marino',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '431',
            'name' => 'Europe/Sarajevo',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '432',
            'name' => 'Europe/Skopje',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '433',
            'name' => 'Europe/Ulyanovsk',
            'offset_to_CET' => '2',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '434',
            'name' => 'Europe/Vatican',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '435',
            'name' => 'Europe/Zagreb',
            'offset_to_CET' => '0',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '436',
            'name' => 'Pacific/Bougainville',
            'offset_to_CET' => '9',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '437',
            'name' => 'Pacific/Chuuk',
            'offset_to_CET' => '8',
            'supported' => 'ACTIVE'
        ),
        array(
            'id' => '438',
            'name' => 'Pacific/Pohnpei',
            'offset_to_CET' => '9',
            'supported' => 'ACTIVE'
        )
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TimeZoneModel::truncate();

        foreach ( $this->timeZones as $tz ) {
            $tzm = new TimeZoneModel($tz);
            $tzm->save();
        }
    }
}
