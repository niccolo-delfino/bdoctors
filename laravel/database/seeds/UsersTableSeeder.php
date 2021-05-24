<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // SEED PER USER
    public function run()
    {
      // creo un array con users fittizi
      $users = [
        [
          'email' => 'tavoni@bdoctors.it',
          'name' => 'Giulio',
          'surname' => 'Tavoni',
          'address' => 'via Pippo 3, Pisa',
          'specialization' => 'Pediatria',
          // Add Hash:.make per creare una password usando hash
          'password' => Hash::make("12345678"),
          'promo' => '1'
        ],
        [
          'email' => 'gbadamosi@bdoctors.it',
          'name' => 'Samuel',
          'surname' => 'Gbadamosi',
          'address' => 'via Paperone 2, Voghera',
          'specialization' => 'Cardiologia',
          'password' => Hash::make("12345678"),
          'promo' => ''
        ],
        [
          'email' => 'delfino@bdoctors.it',
          'name' => 'Niccolò',
          'surname' => 'Delfino',
          'address' => 'via Paperino 13, Savona',
          'specialization' => 'Psichiatria',
          'password' => Hash::make("12345678"),
          'promo' => '3'
        ],
        [
          'email' => 'biffi@bdoctors.it',
          'name' => 'Giacomo',
          'surname' => 'Biffi',
          'address' => 'via Pluto 13, Piacenza',
          'specialization' => 'Medicina dello Sport',
          'password' => Hash::make("12345678"),
          'promo' => ''
        ],
        [
          'email' => 'donato@bdoctors.it',
          'name' => 'Vincenzo',
          'surname' => 'Donato',
          'address' => 'via Paperoga 13, Marsala',
          'specialization' => 'Ginecologia',
          'password' => Hash::make("12345678"),
          'promo' => '2'
        ],
        [
          'email' => 'minnie@bdoctors.it',
          'name' => 'Mouse',
          'surname' => 'Minnie',
          'address' => 'via Minnie 13, Roma',
          'specialization' => 'Medico dello Sport',
          'password' => Hash::make("12345678"),
          'promo' => '2'
        ],
        [
          'email' => 'topolino@bdoctors.it',
          'name' => 'Mouse',
          'surname' => 'Topolino',
          'address' => 'via Topolino 13, Roma',
          'specialization' => 'Ginecologia',
          'password' => Hash::make("12345678"),
          'promo' => '2'
        ],
        [
          'email' => 'paperino@bdoctors.it',
          'name' => 'Duck',
          'surname' => 'Paperino',
          'address' => 'via Paperino 13, Napoli',
          'specialization' => 'Psichiatria',
          'password' => Hash::make("12345678"),
          'promo' => '2'
        ]
      ];

      // creo più istanze dell'oggetto User con i dati fittizzi creati sopra
      foreach ($users as $user) {
        $newUser = new User();

        $newUser->email = $user['email'];
        $newUser->name = $user['name'];
        $newUser->surname = $user['surname'];
        $newUser->address = $user['address'];
        $newUser->specialization = $user['specialization'];
        $newUser->password = $user['password'];
        $newUser->promo = $user['promo'];

        // salvo i valori nella tabella
        $newUser->save();

      }

    }
}
