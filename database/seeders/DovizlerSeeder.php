<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DovizlerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dovizlers')->delete();
        $dovizlers = array(

            array('id' => 797979, 'tarih' => '08.03.2019', 'dovizid' => 79, 'dovizkod' => 'TRY', 'dovizaditr' => 'TÜRK LİRASI', 'dovizadieng' => 'TURKISH LİRAS', 'alisdegeritl' => 1, 'satisdegeritl' => 1, 'aktif' => 1),
            array('id' => 798214, 'tarih' => '11.03.2022',  'dovizid' => 0, 'dovizkod' => 'USD', 'dovizaditr' =>  'ABD DOLARI', 'dovizadieng' => 'US DOLLAR', 'alisdegeritl' => 14.9042, 'satisdegeritl' => 14.9311, 'aktif' => 1),
            array('id' => 798215, 'tarih' => '11.03.2022', 'dovizid' => 1, 'dovizkod' => 'AUD',  'dovizaditr' => 'AVUSTRALYA DOLARI', 'dovizadieng' =>  'AUSTRALIAN DOLLAR', 'alisdegeritl' => 10.8972, 'satisdegeritl' =>  10.9683, 'aktif' => 1),
            array('id' => 798216, 'tarih' => '11.03.2022', 'dovizid' => 2, 'dovizkod' => 'DKK',  'dovizaditr' => 'DANİMARKA KRONU', 'dovizadieng' =>  'DANISH KRONE', 'alisdegeritl' => 2.1974, 'satisdegeritl' => 2.2082, 'aktif' => 1),
            array('id' => 798217, 'tarih' => '11.03.2022', 'dovizid' => 3, 'dovizkod' => 'EUR',  'dovizaditr' => 'EURO', 'dovizadieng' =>  'EURO', 'alisdegeritl' => 16.3758, 'satisdegeritl' => 16.4053, 'aktif' => 1),
            array('id' => 798218, 'tarih' => '11.03.2022', 'dovizid' => 4, 'dovizkod' => 'GBP',  'dovizaditr' => 'İNGİLİZ STERLİNİ', 'dovizadieng' =>  'POUND STERLING', 'alisdegeritl' => 19.4655, 'satisdegeritl' =>  19.567, 'aktif' => 1),
            array('id' => 798219, 'tarih' => '11.03.2022', 'dovizid' => 5, 'dovizkod' => 'CHF',  'dovizaditr' => 'İSVİÇRE FRANGI', 'dovizadieng' =>  'SWISS FRANK', 'alisdegeritl' => 15.9698, 'satisdegeritl' =>  16.0724, 'aktif' => 1),
            array('id' => 798270, 'tarih' => '11.03.2022', 'dovizid' => 6, 'dovizkod' => 'SEK',  'dovizaditr' => 'İSVEÇ KRONU', 'dovizadieng' =>  'SWEDISH KRONA', 'alisdegeritl' => 1.5305, 'satisdegeritl' =>  1.5463, 'aktif' => 1),
            array('id' => 798221, 'tarih' => '11.03.2022', 'dovizid' => 7, 'dovizkod' => 'CAD',  'dovizaditr' => 'KANADA DOLARI', 'dovizadieng' =>  'CANADIAN DOLLAR', 'alisdegeritl' => 11.6543, 'satisdegeritl' =>  11.7068, 'aktif' => 1),
            array('id' => 798299, 'tarih' => '11.03.2022', 'dovizid' => 8, 'dovizkod' => 'KWD',  'dovizaditr' => 'KUVEYT DİNARI', 'dovizadieng' =>  'KUWAITI DINAR', 'alisdegeritl' => 48.7725, 'satisdegeritl' =>  49.4107, 'aktif' => 1),
            array('id' => 798223, 'tarih' => '11.03.2022', 'dovizid' => 9, 'dovizkod' => 'NOK',  'dovizaditr' => 'NORVEÇ KRONU',  'dovizadieng' => 'NORWEGIAN KRONE', 'alisdegeritl' => 1.665, 'satisdegeritl' =>  1.6762, 'aktif' => 1),
            array('id' => 798222, 'tarih' => '11.03.2022', 'dovizid' => 10, 'dovizkod' => 'SAR', 'dovizaditr' =>  'SUUDİ ARABİSTAN RİYALİ', 'dovizadieng' =>  'SAUDI RIYAL', 'alisdegeritl' => 3.9729, 'satisdegeritl' => 3.98, 'aktif' => 1),
            array('id' => 798225, 'tarih' => '11.03.2022', 'dovizid' => 11, 'dovizkod' => 'JPY', 'dovizaditr' =>  'JAPON YENİ', 'dovizadieng' => 'JAPENESE YEN', 'alisdegeritl' => 12.7233, 'satisdegeritl' =>  12.8075, 'aktif' => 1),
            array('id' => 798226, 'tarih' => '11.03.2022', 'dovizid' => 12, 'dovizkod' => 'BGN', 'dovizaditr' =>  'BULGAR LEVASI', 'dovizadieng' =>  'BULGARIAN LEV', 'alisdegeritl' => 8.3262, 'satisdegeritl' =>  8.4352, 'aktif' => 1),
            array('id' => 798227, 'tarih' => '11.03.2022', 'dovizid' => 13, 'dovizkod' => 'RON', 'dovizaditr' =>  'RUMEN LEYİ', 'dovizadieng' => 'NEW LEU', 'alisdegeritl' => 3.2906, 'satisdegeritl' => 3.3336, 'aktif' => 1),
            array('id' => 798228, 'tarih' => '11.03.2022', 'dovizid' => 14, 'dovizkod' => 'RUB', 'dovizaditr' =>  'RUS RUBLESİ', 'dovizadieng' =>  'RUSSIAN ROUBLE', 'alisdegeritl' => 0.12485, 'satisdegeritl' => 0.12649, 'aktif' => 1),
            array('id' => 798229, 'tarih' => '11.03.2022', 'dovizid' => 15, 'dovizkod' => 'IRR', 'dovizaditr' =>  'İRAN RİYALİ', 'dovizadieng' =>  'IRANIAN RIAL', 'alisdegeritl' => 0.03529, 'satisdegeritl' => 0.03575, 'aktif' => 1),
            array('id' => 798230, 'tarih' => '11.03.2022', 'dovizid' => 16, 'dovizkod' => 'CNY', 'dovizaditr' =>  'ÇİN YUANI', 'dovizadieng' => 'CHINESE RENMINBI', 'alisdegeritl' => 2.3418, 'satisdegeritl' => 2.3725, 'aktif' => 1),
            array('id' => 798231, 'tarih' => '11.03.2022', 'dovizid' => 17, 'dovizkod' => 'PKR', 'dovizaditr' =>  'PAKİSTAN RUPİSİ', 'dovizadieng' =>  'PAKISTANI RUPEE', 'alisdegeritl' => 0.08267, 'satisdegeritl' =>  0.08375, 'aktif' => 1),
            array('id' => 798232, 'tarih' => '11.03.2022', 'dovizid' => 18, 'dovizkod' => 'QAR', 'dovizaditr' =>  'KATAR RİYALİ', 'dovizadieng' =>  'QATARI RIAL', 'alisdegeritl' => 4.0558, 'satisdegeritl' => 4.1089, 'aktif' => 1),
            array('id' => 798233, 'tarih' => '11.03.2022', 'dovizid' => 19, 'dovizkod' => 'KRW', 'dovizaditr' =>  'GÜNEY KORE WONU', 'dovizadieng' =>  'SOUTH KOREAN WON', 'alisdegeritl' => 0.01201, 'satisdegeritl' => 0.01216, 'aktif' => 1),
            array('id' => 798234, 'tarih' => '11.03.2022', 'dovizid' => 20, 'dovizkod' => 'AZN', 'dovizaditr' =>  'AZERBAYCAN YENİ MANATI', 'dovizadieng' =>  'AZERBAIJANI NEW MANAT', 'alisdegeritl' => 8.7232, 'satisdegeritl' =>  8.8373, 'aktif' => 1),
            array('id' => 797978, 'tarih' => '08.03.2019', 'dovizid' => 79, 'dovizkod' => 'TRY', 'dovizaditr' =>  'TÜRK LİRASI', 'dovizadieng' => 'TURKISH LİRAS', 'alisdegeritl' => 1, 'satisdegeritl' => 1, 'aktif' => 1),
            array('id' => 798210, 'tarih' => '11.03.2022', 'dovizid' => 0, 'dovizkod' => 'USD',  'dovizaditr' => 'ABD DOLARI', 'dovizadieng' =>  'US DOLLAR', 'alisdegeritl' => 14.9042, 'satisdegeritl' =>  14.9311, 'aktif' => 1),
            array('id' => 898215, 'tarih' => '11.03.2022', 'dovizid' => 1, 'dovizkod' => 'AUD',  'dovizaditr' => 'AVUSTRALYA DOLARI', 'dovizadieng' =>  'AUSTRALIAN DOLLAR', 'alisdegeritl' => 10.8972, 'satisdegeritl' =>  10.9683, 'aktif' => 1),
            array('id' => 598216, 'tarih' => '11.03.2022', 'dovizid' => 2, 'dovizkod' => 'DKK',  'dovizaditr' => 'DANİMARKA KRONU', 'dovizadieng' =>  'DANISH KRONE', 'alisdegeritl' => 2.1974, 'satisdegeritl' => 2.2082, 'aktif' => 1),
            array('id' => 698217, 'tarih' => '11.03.2022',  'dovizid' => 3, 'dovizkod' => 'EUR', 'dovizaditr' =>  'EURO', 'dovizadieng' =>  'EURO', 'alisdegeritl' => 16.3758, 'satisdegeritl' => 16.4053, 'aktif' => 1),
            array('id' => 298218, 'tarih' => '11.03.2022', 'dovizid' => 4, 'dovizkod' => 'GBP',  'dovizaditr' => 'İNGİLİZ STERLİNİ', 'dovizadieng' =>  'POUND STERLING', 'alisdegeritl' => 19.4655, 'satisdegeritl' =>  19.567, 'aktif' => 1),
            array('id' => 398219, 'tarih' => '11.03.2022', 'dovizid' => 5, 'dovizkod' => 'CHF',  'dovizaditr' => 'İSVİÇRE FRANGI', 'dovizadieng' => 'SWISS FRANK', 'alisdegeritl' => 15.9698, 'satisdegeritl' => 16.0724, 'aktif' => 1),
            array('id' => 598220, 'tarih' => '11.03.2022', 'dovizid' => 6, 'dovizkod' => 'SEK',  'dovizaditr' => 'İSVEÇ KRONU', 'dovizadieng' => 'SWEDISH KRONA', 'alisdegeritl' => 1.5305, 'satisdegeritl' => 1.5463, 'aktif' => 1),
            array('id' => 698221, 'tarih' => '11.03.2022', 'dovizid' => 7, 'dovizkod' => 'CAD',  'dovizaditr' => 'KANADA DOLARI', 'dovizadieng' => 'CANADIAN DOLLAR', 'alisdegeritl' => 11.6543, 'satisdegeritl' =>  11.7068, 'aktif' => 1),
            array('id' => 198222, 'tarih' => '11.03.2022', 'dovizid' => 8, 'dovizkod' => 'KWD',  'dovizaditr' => 'KUVEYT DİNARI', 'dovizadieng' =>  'KUWAITI DINAR', 'alisdegeritl' => 48.7725, 'satisdegeritl' => 49.4107, 'aktif' => 1),
            array('id' => 998223, 'tarih' => '11.03.2022', 'dovizid' => 9, 'dovizkod' => 'NOK',  'dovizaditr' => 'NORVEÇ KRONU', 'dovizadieng' => 'NORWEGIAN KRONE', 'alisdegeritl' => 1.665, 'satisdegeritl' =>  1.6762, 'aktif' => 1),
            array('id' => 798224, 'tarih' => '11.03.2022', 'dovizid' => 10, 'dovizkod' => 'SAR', 'dovizaditr' =>  'SUUDİ ARABİSTAN RİYALİ', 'dovizadieng' =>  'SAUDI RIYAL', 'alisdegeritl' => 3.9729, 'satisdegeritl' =>  3.98, 'aktif' => 1),
            array('id' => 798220, 'tarih' => '11.03.2022', 'dovizid' => 11, 'dovizkod' => 'JPY', 'dovizaditr' =>  'JAPON YENİ', 'dovizadieng' =>  'JAPENESE YEN', 'alisdegeritl' => 12.7233, 'satisdegeritl' => 12.8075, 'aktif' => 1),
            array('id' => 700226, 'tarih' => '11.03.2022', 'dovizid' => 12, 'dovizkod' => 'BGN', 'dovizaditr' =>  'BULGAR LEVASI', 'dovizadieng' => 'BULGARIAN LEV', 'alisdegeritl' => 8.3262, 'satisdegeritl' =>  8.4352, 'aktif' => 1),
            array('id' => 798007, 'tarih' => '11.03.2022', 'dovizid' => 13, 'dovizkod' => 'RON', 'dovizaditr' =>  'RUMEN LEYİ', 'dovizadieng' => 'NEW LEU', 'alisdegeritl' => 3.2906, 'satisdegeritl' => 3.3336, 'aktif' => 1),
            array('id' => 798000, 'tarih' => '11.03.2022', 'dovizid' => 14, 'dovizkod' => 'RUB', 'dovizaditr' =>  'RUS RUBLESİ', 'dovizadieng' =>  'RUSSIAN ROUBLE', 'alisdegeritl' => 0.12485, 'satisdegeritl' =>  0.12649, 'aktif' => 1),
            array('id' => 898229, 'tarih' => '11.03.2022', 'dovizid' => 15, 'dovizkod' => 'IRR', 'dovizaditr' => 'İRAN RİYALİ', 'dovizadieng' => 'IRANIAN RIAL', 'alisdegeritl' => 0.03529, 'satisdegeritl' =>  0.03575, 'aktif' =>  1),
            array('id' => 744230, 'tarih' => '11.03.2022', 'dovizid' => 16, 'dovizkod' => 'CNY', 'dovizaditr' =>  'ÇİN YUANI', 'dovizadieng' => 'CHINESE RENMINBI', 'alisdegeritl' => 2.3418, 'satisdegeritl' =>  2.3725, 'aktif' => 1),
            array('id' => 766231, 'tarih' => '11.03.2022', 'dovizid' => 17, 'dovizkod' => 'PKR', 'dovizaditr' =>  'PAKİSTAN RUPİSİ', 'dovizadieng' =>  'PAKISTANI RUPEE', 'alisdegeritl' => 0.08267, 'satisdegeritl' => 0.08375, 'aktif' => 1),
            array('id' => 798992, 'tarih' => '11.03.2022', 'dovizid' => 18, 'dovizkod' => 'QAR', 'dovizaditr' =>  'KATAR RİYALİ', 'dovizadieng' => 'QATARI RIAL', 'alisdegeritl' => 4.0558, 'satisdegeritl' => 4.1089, 'aktif' => 1),
            array('id' => 898003, 'tarih' => '11.03.2022',  'dovizid' => 19, 'dovizkod' => 'KRW', 'dovizaditr' =>  'GÜNEY KORE WONU', 'dovizadieng' =>  'SOUTH KOREAN WON', 'alisdegeritl' => 0.01201, 'satisdegeritl' => 0.01216, 'aktif' => 1),
            array('id' => 998234, 'tarih' => '11.03.2022', 'dovizid' => 20, 'dovizkod' => 'AZN', 'dovizaditr' =>  'AZERBAYCAN YENİ MANATI', 'dovizadieng' =>  'AZERBAIJANI NEW MANAT', 'alisdegeritl' => 8.7232, 'satisdegeritl' =>  8.8373, 'aktif' => 1)
        );

        DB::table('dovizlers')->insert($dovizlers);
    }
}
