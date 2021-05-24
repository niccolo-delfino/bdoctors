<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // SEED PER SERVIZZI 
    public function run()
    {
      // creo un array con servizi medici fittizi
      $services =
      [
        [
          'name'=>'Assistenza Domiciliare',
        ],
        [
          'name'=>'Esami Strumentali',
        ],
        [
          'name'=>'Esami di Laboratorio',
        ],
        [
          'name'=>'Ginnastica di Riabilitazione',
        ],
        [
          'name'=>'Perizia Medico legale per Responsabilità',
        ],
        [
          'name'=>'Rilascio Certificati',
        ],
        [
          'name'=>'Seduta di Neuropsichiatria',
        ],
        [
          'name'=>'Video Consulto',
        ],
        [
          'name'=>'Visita di Controllo',
        ],
        [
          'name'=>'Visita Specialistica',
        ]
      ];

      // creo più istanze dell'oggetto Service con i dati fittizzi creati sopra
      foreach ($services as $service) {
       $newService = new Service() ;

       $newService->name = $service['name'];

       // salvo i valori nella tabella
       $newService->save();
      }
  }
}
