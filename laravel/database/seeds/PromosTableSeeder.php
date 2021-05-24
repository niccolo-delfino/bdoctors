<?php

use Illuminate\Database\Seeder;
use App\Promo;

class PromosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // SEED PER PROMO
    public function run()
    {
        // SEEDER PER PROMO
        $promos = [
            [
              'id' => '1',
              'name' => 'Standard',
              'price' => 2.99,
              'duration' => 24
            ],
            [
              'id' => '2',
              'name' => 'Premium',
              'price' => 5.99,
              'duration' => 72
            ],
            [
              'id' => '3',
              'name' => 'Gold',
              'price' => 9.99,
              'duration' => 144
            ],
      ];

      // creo più istanze dell'oggetto promos con i dati fittizzi creati sopra
      foreach ($promos as $promo) {
        $newPromo = new Promo();

        $newPromo->id = $promo['id'];
        $newPromo->name = $promo['name'];
        $newPromo->price = $promo['price'];
        $newPromo->duration = $promo['duration'];

        // salvo i valori nella tabella
        $newPromo->save();
      }

    }
}