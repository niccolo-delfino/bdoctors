<?php

use Illuminate\Database\Seeder;
use App\Specialization;

class SpecializationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // SEED PER SPECIALIZZAZIONI 
    public function run()
    {
      // creo un array con specializzazioni mediche fittizie
      $specializations =
      [
        [
          'name'=>'Andrologia',
        ],
        [
          'name'=>'Cardiologia',
        ],
        [
          'name'=>'Dermatologia',
        ],
        [
          'name'=>'Diabetologia',
        ],
        [
          'name'=>'Dietologia',
        ],
        [
          'name'=>'Endocrinologia',
        ],
        [
          'name'=>'Fisioterapia',
        ],
        [
          'name'=>'Ginecologia',
        ],
        [
          'name'=>'Infettivologia',
        ],
        [
          'name'=>'Medicina dello Sport',
        ],
        [
          'name'=>'Medico Legale',
        ],
        [
          'name'=>'Neurologia',
        ],
        [
          'name'=>'Oculistica',
        ],
        [
          'name'=>'Odontoiatria',
        ],
        [
          'name'=>'Oncologia',
        ],
        [
          'name'=>'Ortopedia',
        ],
        [
          'name'=>'Otorinolaringoiatria',
        ],
        [
          'name'=>'Pediatria',
        ],
        [
          'name'=>'Pneumologia',
        ],
        [
          'name'=>'Psichiatria',
        ],
        [
          'name'=>'Psicologia',
        ],
        [
          'name'=>'Radiologia',
        ],
        [
          'name'=>'Senologia',
        ],
        [
          'name'=>'Urologia',
        ]
      ];

      // creo più istanze dell'oggetto Specialization con i dati fittizzi creati sopra
      foreach ($specializations as $specialization) {
        $newSpecialization = new Specialization();

        $newSpecialization->name = $specialization['name'];

        // salvo i valori nella tabella
        $newSpecialization->save();
      }
  }
}
