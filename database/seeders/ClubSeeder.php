<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'DHW Antwerpen HC', 'country' => 'België', 'city' => 'Antwerpen'],
            ['name' => 'Olse Merksem HC', 'country' => 'België', 'city' => 'Antwerpen Merksem'],
            ['name' => 'KV Sasja HC Hoboken', 'country' => 'België', 'city' => 'Antwerpen'],
            ['name' => 'Kc \'t noorden vzw', 'country' => 'België', 'city' => 'Antwerpen Zandvliet'],
            ['name' => 'hvh Zandvliet vzw', 'country' => 'België', 'city' => 'Antwerpen Zandvliet'],
            ['name' => 'HC WELTA Bonheiden', 'country' => 'België', 'city' => 'Bonheiden'],
            ['name' => 'Brasschaat HC', 'country' => 'België', 'city' => 'Brasschaat'],
            ['name' => 'HC Duffel', 'country' => 'België', 'city' => 'Duffel'],
            ['name' => 'HC Heist-op-den-Berg', 'country' => 'België', 'city' => 'Heist-op-den-Berg'],
            ['name' => 'HV Uilenspiegel Wilrijk vzw', 'country' => 'België', 'city' => 'Wilrijk'],
            ['name' => 'HC WELTA vzw', 'country' => 'België', 'city' => 'Mechelen'],
            ['name' => 'hc Putte', 'country' => 'België', 'city' => 'Putte'],
            ['name' => 'HC Schoten', 'country' => 'België', 'city' => 'Schoten'],
            ['name' => 'HC Rhino', 'country' => 'België', 'city' => 'Turnhout'],
            ['name' => 'HC Charleroi-Ransart', 'country' => 'België', 'city' => 'Charleroi'],
            ['name' => 'HBC Charleroi-Ransart', 'country' => 'België', 'city' => 'Charleroi'],
            ['name' => 'entente du centre C.L.H', 'country' => 'België', 'city' => 'La Hestre'],
            ['name' => 'mouloudia Jemappes', 'country' => 'België', 'city' => 'Jemappes'],
            ['name' => 'HC Mouscron', 'country' => 'België', 'city' => 'Moeskroen'],
            ['name' => 'Estudiantes HC Tournai', 'country' => 'België', 'city' => 'Doornik'],
            ['name' => 'Handbal Bilzen', 'country' => 'België', 'city' => 'Bilzen'],
            ['name' => 'Achilles Bocholt', 'country' => 'België', 'city' => 'Bocholt'],
            ['name' => 'Achilles Bocholt Beek', 'country' => 'België', 'city' => 'Bocholt'],
            ['name' => 'Rode Ster Gingelom', 'country' => 'België', 'city' => 'Gingelom'],
            ['name' => 'Achilles Grote Brogel', 'country' => 'België', 'city' => 'Grote-Brogel'],
            ['name' => 'HC Hades Hamont-Achel', 'country' => 'België', 'city' => 'Hamont-Achel'],
            ['name' => 'Initia HC Hasselt', 'country' => 'België', 'city' => 'Hasselt'],
            ['name' => 'HV Arena', 'country' => 'België', 'city' => 'Hechtel-Eksel'],
            ['name' => 'Kreasa Houthalen', 'country' => 'België', 'city' => 'Houthalen-Helchteren'],
            ['name' => 'HC Pentagoon Kortessem', 'country' => 'België', 'city' => 'Kortessem'],
            ['name' => 'handbal vereniging lommel', 'country' => 'België', 'city' => 'Lommel'],
            ['name' => 'Handbal Lummen', 'country' => 'België', 'city' => 'Lummen'],
            ['name' => 'HC Maasmechelen \'65', 'country' => 'België', 'city' => 'Maasmechelen'],
            ['name' => 'DHC Meeuwen-Gruitrode', 'country' => 'België', 'city' => 'Meeuwen-Gruitrode'],
            ['name' => 'HHV Meeuwen', 'country' => 'België', 'city' => 'Meeuwen-Gruitrode'],
            ['name' => 'Sporting Pelt', 'country' => 'België', 'city' => 'Neerpelt'],
            ['name' => 'HC Opglabbeek', 'country' => 'België', 'city' => 'Opglabbeek'],
            ['name' => 'DHC Overpelt vzw', 'country' => 'België', 'city' => 'Overpelt'],
            ['name' => 'HC Overpelt vzw', 'country' => 'België', 'city' => 'Overpelt'],
            ['name' => 'HC Peer', 'country' => 'België', 'city' => 'Peer'],
            ['name' => 'HB Sint-Truiden jm', 'country' => 'België', 'city' => 'Sint-Truiden'],
            ['name' => 'HC Hannibal Tessenderlo', 'country' => 'België', 'city' => 'Tessenderlo'],
            ['name' => 'Handbal Tongeren', 'country' => 'België', 'city' => 'Tongeren'],
            ['name' => 'Real Kiewit', 'country' => 'België', 'city' => 'Zonhoven'],
            ['name' => 'HC Amay', 'country' => 'België', 'city' => 'Amay'],
            ['name' => 'HC 200 Ans', 'country' => 'België', 'city' => 'Ans'],
            ['name' => 'VOO RHC Grace-Hollogne - Ans', 'country' => 'België', 'city' => 'Ans'],
            ['name' => 'Union Beynoise', 'country' => 'België', 'city' => 'Beyne-Heusay'],
            ['name' => 'HC Bressoux', 'country' => 'België', 'city' => 'Luik'],
            ['name' => 'KTSV Eupen', 'country' => 'België', 'city' => 'Eupen'],
            ['name' => 'HC Raeren 76', 'country' => 'België', 'city' => 'Eupen'],
            ['name' => 'HC Eynatten-Raeren', 'country' => 'België', 'city' => 'Eynatten'],
            ['name' => 'ROC FlÃ©malle', 'country' => 'België', 'city' => 'FlÃ©malle'],
            ['name' => 'HC Herstal- Trooz', 'country' => 'België', 'city' => 'Trooz'],
            ['name' => 'JS Herstal handball', 'country' => 'België', 'city' => 'Herstal'],
            ['name' => 'voo HC Herstal/FlÃ©malle Roc', 'country' => 'België', 'city' => 'Herstal-FlÃ©malle'],
            ['name' => 'ACS HC Liege', 'country' => 'België', 'city' => 'Luik'],
            ['name' => 'jeunesse Jemeppe', 'country' => 'België', 'city' => 'Seraing'],
            ['name' => 'Handball Club Silly', 'country' => 'België', 'city' => 'Silly'],
            ['name' => 'HC Malmedy', 'country' => 'België', 'city' => 'Malmedy'],
            ['name' => 'Renaissance MontegnÃ©e', 'country' => 'België', 'city' => 'Saint-Nicolas'],
            ['name' => 'JS Athenee MontegnÃ©e', 'country' => 'België', 'city' => 'unknown'],
            ['name' => 'HC Old Blacks Hesbignon', 'country' => 'België', 'city' => 'Amay'],
            ['name' => 'HC Sprimont', 'country' => 'België', 'city' => 'Sprimont'],
            ['name' => 'HC Verviers', 'country' => 'België', 'city' => 'Verviers'],
            ['name' => 'Sporting Mont-Sur-Marchienne', 'country' => 'België', 'city' => 'Montigny-le-Tilleul'],
            ['name' => 'Handball Villers 59', 'country' => 'België', 'city' => 'Villers'],
            ['name' => 'handball FÃ©mina VisÃ©', 'country' => 'België', 'city' => 'Wezet'],
            ['name' => 'HC VisÃ© BM', 'country' => 'België', 'city' => 'Wezet'],
            ['name' => 'HC Aalst', 'country' => 'België', 'city' => 'Aalst'],
            ['name' => 'HC Groot Berlare', 'country' => 'België', 'city' => 'Baasrode'],
            ['name' => 'HC Brabo Denderbelle', 'country' => 'België', 'city' => 'Lebbeke Dendermonde'],
            ['name' => 'HC Elita Buggenhout', 'country' => 'België', 'city' => 'Buggenhout'],
            ['name' => 'HBC Dendermonde', 'country' => 'België', 'city' => 'Dendermonde'],
            ['name' => 'HC Eeklo', 'country' => 'België', 'city' => 'Eeklo'],
            ['name' => 'HCA Erpe-Mere', 'country' => 'België', 'city' => 'Erpe-Mere'],
            ['name' => 'HBC Evergem', 'country' => 'België', 'city' => 'Evergem'],
            ['name' => 'HC Don Bosco Gent', 'country' => 'België', 'city' => 'Gent'],
            ['name' => 'Elita Lebbeke', 'country' => 'België', 'city' => 'Lebbeke'],
            ['name' => 'HK waasland Lokeren', 'country' => 'België', 'city' => 'Lokeren'],
            ['name' => 'HC attila Temse vzw', 'country' => 'België', 'city' => 'Temse'],
            ['name' => 'DHC Waasmunster', 'country' => 'België', 'city' => 'Waasmunster'],
            ['name' => 'HK Waasland Waasmunster', 'country' => 'België', 'city' => 'Waasmunster'],
            ['name' => 'HC Assesse', 'country' => 'België', 'city' => 'Assesse'],
            ['name' => 'HBC Mettet', 'country' => 'België', 'city' => 'Mettet'],
            ['name' => 'HC Namur', 'country' => 'België', 'city' => 'Namur'],
            ['name' => 'HC Miavoye', 'country' => 'België', 'city' => 'Onhaye'],
            ['name' => 'HC Philippeville', 'country' => 'België', 'city' => 'Philippeville'],
            ['name' => 'HC Arlon', 'country' => 'België', 'city' => 'Aarlen'],
            ['name' => 'NCHC Bastogne', 'country' => 'België', 'city' => 'Bastogne'],
            ['name' => 'Handball Ciney', 'country' => 'België', 'city' => 'Ciney'],
            ['name' => 'HC Houffalize', 'country' => 'België', 'city' => 'Houffalize'],
            ['name' => 'HC Libin', 'country' => 'België', 'city' => 'Libin'],
            ['name' => 'HC Saint-Hubert', 'country' => 'België', 'city' => 'Saint-Hubert'],
            ['name' => 'HC Aarschot', 'country' => 'België', 'city' => 'Aarschot'],
            ['name' => 'Groot-Bijgaarden sportkring', 'country' => 'België', 'city' => 'Groot-Bijgaarden'],
            ['name' => 'HBC Beauraing', 'country' => 'België', 'city' => 'Beauraing'],
            ['name' => 'HC AtomiX', 'country' => 'België', 'city' => 'Haacht'],
            ['name' => 'HC Anderlecht', 'country' => 'België', 'city' => 'Anderlecht'],
            ['name' => 'Brussels Handball Club', 'country' => 'België', 'city' => 'Brussel'],
            ['name' => 'Brussels-Evere Handball School', 'country' => 'België', 'city' => 'Evere'],
            ['name' => 'HC Evere', 'country' => 'België', 'city' => 'Evere'],
            ['name' => 'Mouloudia club de Bruxelles', 'country' => 'België', 'city' => 'Brussel'],
            ['name' => 'United Brussels Handball Club', 'country' => 'België', 'city' => 'Brussel'],
            ['name' => 'HC Leuven', 'country' => 'België', 'city' => 'Haasrode'],
            ['name' => 'Handball Club Perwez', 'country' => 'België', 'city' => 'Ixelles'],
            ['name' => 'HC Gogogad Jette', 'country' => 'België', 'city' => 'Jette'],
            ['name' => 'HC Jette Saint-Pierre', 'country' => 'België', 'city' => 'Jette'],
            ['name' => 'HC Kraainem', 'country' => 'België', 'city' => 'Kraainem'],
            ['name' => 'Association HC Braine-Ottignies', 'country' => 'België', 'city' => 'Ottignies'],
            ['name' => 'Handbal Kampenhout', 'country' => 'België', 'city' => 'Zaventem'],
            ['name' => 'Handball Sporting Club Tubize', 'country' => 'België', 'city' => 'Tubeke'],
            ['name' => 'ASH Waterloo', 'country' => 'België', 'city' => 'Waterloo (gemeente)'],
            ['name' => 'HC Olva Brugge', 'country' => 'België', 'city' => 'Brugge'],
            ['name' => 'HC Harelbeke', 'country' => 'België', 'city' => 'Harelbeke'],
            ['name' => 'HBC Izegem', 'country' => 'België', 'city' => 'Izegem'],
            ['name' => 'Apolloon Kortrijk', 'country' => 'België', 'city' => 'Kortrijk'],
            ['name' => 'Appolloon Kuurne', 'country' => 'België', 'city' => 'Kuurne'],
            ['name' => 'DHT Middelkerke-Izegem', 'country' => 'België', 'city' => 'Middelkerke Izegem'],
            ['name' => 'Thor Handbal', 'country' => 'België', 'city' => 'Oostende'],
            ['name' => 'Knack Handbalteam Roeselare', 'country' => 'België', 'city' => 'Roeselare'],
            ['name' => 'Knack Handbalteam Staden', 'country' => 'België', 'city' => 'Staden'],
            ['name' => 'HC Tielt', 'country' => 'België', 'city' => 'Tielt'],
            ['name' => 'Desselgemse HC', 'country' => 'België', 'city' => 'Waregem'],
            ['name' => 'Wevelgemse Wolven', 'country' => 'België', 'city' => 'Wevelgem']
        ]);
    }
}
