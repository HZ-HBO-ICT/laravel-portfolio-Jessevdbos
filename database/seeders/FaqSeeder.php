<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Faq;
use Faker\Provider\Text;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([[
            'question' => 'Hoe print je een document hier op de HZ?',
            'answer' => 'Als de print opdracht is uitgevoerd,
                meld je jezelf aan op de TouchID naast de printer met behulp van de HZ pas.
                Kies vervolgens voor de optie Print / Afdrukken.
                Vervolgens krijg je te zien welke printopdrachten er gereed staan.
                Als er voldoende saldo op je printaccount staat worden de printopdrachten afgedrukt.
                Na het afdrukken druk op de TouchID op Stop en vervolgens Logout.',
            'link' =>
                "https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/service?unid=
                bd81be42f243450e95e510949a496145&from=cb85b1fc-30b7-4c40-9fdb-2f95a55db6ea",
        ], [
            'question' => 'Hoe scan je een document en stuur je dit naar je laptop hier op de HZ?',
            'answer' => 'Zorg ervoor dat je minimaal €0,07 tegoed hebt.
                Scannen is gratis maar dit bedrag (of hoger) moet op op je HZ pas staan.
                Meld jezelf aan op de TouchID naast de printer met behulp van de HZ pas.
                Kies in het TouchID menu voor de optie Scanning - Scan.
                Leg de originele(n) op de feeder of glazen plaat.
                Druk op Scan and Send. Druk op Scan to me. Druk op Yes. Druk op de Start knop.
                Het volgende scherm wordt weergegeven als er gescand wordt via de glazen plaat.
                Druk op de groene Start knop op de printer om pagina voor pagina te scannen.
                Als dit gereed is druk dan op Start Sending.
                Na het scannen druk op de TouchID op Stop en vervolgens Logout.',
            'link' =>
                "https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/service?unid=
                bd81be42f243450e95e510949a496145&from=cb85b1fc-30b7-4c40-9fdb-2f95a55db6ea",
        ], [
            'question' => 'Wat moet je doen als je ziek bent of symptomen van het corona virus?',
            'answer' => 'Volg het stappenplan van de HZ',
            'link' =>
                "https://hz.nl/uploads/documents/20201001-Schema-Wel-of-niet-naar-de-HZ-bij-gezondheidsklachten.pdf?
                utm_medium=email&_hsmi=2&_hsenc=p2ANqtz-_wVxC-wKVc9CoWegsYD-KZQ8D1NrPbpHByenzbbZA7Wj6Yvlg9XmhzbGED3vdf
                Wcucz29F2wY2u_rAmwvgoBCGr0XKQg&utm_content=2&utm_source=hs_email#asset:25736",
        ], [
            'question' => 'Hoe kun je een projectruimte boeken in één van de vleugels van het gebouw?',
            'answer' => 'Via de volgende link kun je een projectruimte reserveren.
                Indien je na 15 minuten na aanvang van je reservering nog niet aanwezig bent,
                vervalt de reservering en is de ruimte vrij te gebruiken voor anderen.',
            'link' =>
                "https://hzuniversity.topdesk.net/tas/public/ssp/52a63378-addd-4b21-b808-571200fd8d0c",
        ], [
            'question' => 'Wat zijn de instructies om je auto te parkeren op het HZ parkeerterrein?',
            'answer' =>
                'Gratis parkeren is mogelijk op het parkeerterrein van PZEM aan de Poelendaelesingel 10 in Middelburg.
                Studenten en medewerkers kunnen enkel op vertoon van een HZ-pas het terrein betreden,
                gasten kunnen aanbellen bij de slagboom.
                Bij de slagbomen van het parkeerterrein Poelendaelesingel is een bel aanwezig.
                Na het passeren van de slagboom volg je de borden naar de HZ-parkeerplaatsen,
                gemarkeerd met een wit bordje met het HZ-logo.',
            'link' =>
                "https://hz.nl/over-de-hz/contact/middelburg",
        ]]);
    }
}
