<?php

use Illuminate\Database\Seeder;
use App\Doctor;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // SEED PER DOCTOR PROFILO
    public function run()
    {

      // creo un array con dottori fittizi
      $doctors = [
        [
          'user_id' => '1',
          'user_name' => 'Tavoni',
          'specialization' => 'Pediatria',
          'photo' => 'img/n06TwdilIhHdBdBfsrEweE5eycmv4lTigHK7dkWM.jpg',
          'phone_num' => '333 796548',
          'cv' => 'cv/bH0J77q6RRnQkvQGC3emzfLfmEAPPsh4jDXebwFo.pdf',
          'office_address' => 'Via del Porticato 124',
          'city' => 'Teramo'
        ],
        [
          'user_id' => '2',
          'user_name' => 'Gbadamosi',
          'specialization' => 'Cardiologia',
          'photo' => 'img/mtJcp5Rv8LRZYpk0HgdXefupNuXu8zdaw0L5ZMd7.jpg',
          'phone_num' => '338 489658',
          'cv' => 'cv/dzgPuobwVF9c5LgdsP7BaxDcAuPl9w0FlamU48kG.pdf',
          'office_address' => 'Via della Posta 222',
          'city' => 'Pisa'
        ],
        [
          'user_id' => '3',
          'user_name' => 'Delfino',
          'specialization' => 'Psichitria',
          'photo' => 'img/yfLhb3QorxYF7gNsGgtjWj4QyH2sB5ukCd4Nm9XG.jpg',
          'phone_num' => '335 486588',
          'cv' => 'cv/GqLTx4a1PWn2XSvWCnzdObWEADFyctdrdczGhCSZ.pdf',
          'office_address' => 'Via del Municipio antico',
          'city' => 'Potenza'
        ],
        [
          'user_id' => '4',
          'user_name' => 'Biffi',
          'specialization' => 'Medico dello Sport',
          'photo' => 'img/ihJKQHUwKdawqD1w74UbpRYUvTdQUPoJl8ASfhhh.jpg',
          'phone_num' => '333 894568',
          'cv' => 'cv/AVxn5XnJs05AAvYJniepSNZ2K3XWjI1nuDc3EgP9.pdf',
          'office_address' => 'Via Ciliegi 245 ',
          'city' => 'Roma'
        ],
        [
          'user_id' => '5',
          'user_name' => 'Donato',
          'specialization' => 'Ginecologia',
          'photo' => 'img/Et2mLi8H8mn1wWNqQ1cdgvCysPSOQixc41S7J9b1.jpg',
          'phone_num' => '333 458547',
          'cv' => 'cv/3Zz03B9eV9O1TctLHEc0ERYT4RZNDjjccvGoiYEn.pdf',
          'office_address' => 'Via Centrale 3',
          'city' => 'Roma'
        ],
        [
          'user_id' => '6',
          'user_name' => 'Minnie',
          'specialization' => 'Medico dello Sport',
          'photo' => '',
          'phone_num' => '333 458547',
          'cv' => '',
          'office_address' => 'Via Caracciolo 8',
          'city' => 'Roma'
        ],
        [
          'user_id' => '7',
          'user_name' => 'Topolino',
          'specialization' => 'Ginecologia',
          'photo' => '',
          'phone_num' => '340 927401',
          'cv' => '',
          'office_address' => 'Via Flaminia 8',
          'city' => 'Roma'
        ],
        [
          'user_id' => '8',
          'user_name' => 'Paperino',
          'specialization' => 'Psichiatria',
          'photo' => '',
          'phone_num' => '340 362346',
          'cv' => '',
          'office_address' => 'Via Nazionale 2',
          'city' => 'Napoli'
        ]

      ];

      // creo più istanze dell'oggetto Doctor con i dati fittizzi creati sopra
      foreach ($doctors as $doctor) {
        $newDoctor = new Doctor();

        $newDoctor->user_id = $doctor['user_id'];
        $newDoctor->user_name = $doctor['user_name'];
        $newDoctor->specialization = $doctor['specialization'];
        $newDoctor->photo = $doctor['photo'];
        $newDoctor->phone_num = $doctor['phone_num'];
        $newDoctor->office_address = $doctor['office_address'];
        $newDoctor->city = $doctor['city'];
        $newDoctor->cv = $doctor['cv'];

        // salvo i valori nella tabella
        $newDoctor->save();

      }
    }
}
