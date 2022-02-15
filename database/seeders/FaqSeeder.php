<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('faqs')->insert([
            'question' => 'Hoe print je een document hier op de HZ?',
            'answer' => 'De DocShop is een uitgebreide reproductieafdeling.
                Je kunt hier voor een studentenprijs documenten professioneel laten printen,
                kopiëren in kleur of inbinden.
                Heel handig wanneer je bijvoorbeeld je scriptie of een groot verslag wilt afdrukken.'
        ]);
        \DB::table('faqs')->insert([
            'question' => 'Hoe scan je een document en stuur je dit naar je laptop hier op de HZ?',
            'answer' => 'As je verbonden bent met de printer kan je je HZ pas scannen en dan met de printer inscannen.
                Het PDF bestand zou automatisch op je computer moeten komen.'
        ]);
        \DB::table('faqs')->insert([
            'question' => 'Wat moet je doen als je ziek bent of symptomen van het corona virus?',
            'answer' => 'Er worden afspraken met je gemaakt over het volgen van het onderwijs zodat je geen onnodige
                vertraging oploopt.'
        ]);
        \DB::table('faqs')->insert([
            'question' => 'Hoe kun je een projectruimte boeken in één van de vleugels van het gebouw?',
            'answer' => 'Log in op hz.nl en ga naar het selfserviceportal, ga via dat scherm naar maak een reservering.'
        ]);
        \DB::table('faqs')->insert([
            'question' => 'Wat zijn de instructies om je auto te parkeren op het HZ parkeerterrein?',
            'answer' => "Gebruik je HZ pas om de poort te openen naar de parkeerplaatsen.
                Je vind ook rond de HZ op verschillende parkeerplaatsen groene auto's op de straat.
                Deze groene auto's op de weg, aangebracht met street-graffiti, geven parkeerplaatsen weer waar
                geparkeerd mag worden."
        ]);
    }
}
