<?php

use Illuminate\Database\Seeder;
use App\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      // creo un array con messaggi fittizi
      $messages = [
        [
          'email_user' => 'tavoni@bdoctors.it',
          'name' => 'Maria',
          'surname' => 'Rossi',
          'email' => 'maria.rossi@gmail.com',
          'phone_num' => '+39 338 252 2355',
          'message' => 'Grazie di tutto dottore',
          'created_at' => '2020-03-27 13:07:27'
        ],
        [
          'email_user' => 'tavoni@bdoctors.it',
          'name' => 'Alessandro',
          'surname' => 'Bianchi',
          'email' => 'alessandro.bianchi@gmail.com',
          'phone_num' => '+39 340 153 1937',
          'message' => 'Dottore ho perso il suo numero di telefono, me lo può ridare?',
          'created_at' => '2020-11-23 09:09:10'
        ],
        [
          'email_user' => 'tavoni@bdoctors.it',
          'name' => 'Luisa',
          'surname' => 'Marconi',
          'email' => 'luisa.marconi@gmail.com',
          'phone_num' => '+39 340 234 1937',
          'message' => 'Dottore quando ci possiamo vedere?',
          'created_at' => '2021-01-13 11:43:53'
        ],
        [
          'email_user' => 'tavoni@bdoctors.it',
          'name' => 'Giorgio',
          'surname' => 'Rossi',
          'email' => 'giorgio.rossi@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-02-08 04:07:53'
        ],
        [
          'email_user' => 'tavoni@bdoctors.it',
          'name' => 'Fabio',
          'surname' => 'Marino',
          'email' => 'fabio.marino@gmail.com',
          'phone_num' => '+39 340 233 3235',
          'message' => 'Dottore come si chiamava quella medicina?',
          'created_at' => '2021-02-14 15:39:53'
        ],
        [
          'email_user' => 'tavoni@bdoctors.it',
          'name' => 'Mario',
          'surname' => 'Rossi',
          'email' => 'mario.rossi@gmail.com',
          'phone_num' => '+39 340 210 1029',
          'message' => 'Salve dottore. Vorrei fissare una visita medica per la prossima settimana. Può indicarmi le sue disponibilità?',
          'created_at' => '2021-02-26 16:59:53'
        ],
        [
          'email_user' => 'tavoni@bdoctors.it',
          'name' => 'Mattia',
          'surname' => 'Verdi',
          'email' => 'mattia.verdi@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Grazie dottore, ora sto molto meglio.',
          'created_at' => '2021-03-14 14:07:53'
        ],
        [
          'email_user' => 'tavoni@bdoctors.it',
          'name' => 'Giorgio',
          'surname' => 'Canta',
          'email' => 'giorgio.canta@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-03-18 07:28:30'
        ],
        [
          'email_user' => 'tavoni@bdoctors.it',
          'name' => 'Sara',
          'surname' => 'Bianchi',
          'email' => 'sara.bianchi@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-04-24 10:07:53'
        ],
        [
          'email_user' => 'tavoni@bdoctors.it',
          'name' => 'Giorgio',
          'surname' => 'Canta',
          'email' => 'giorgio.canta@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-04-16 19:32:53'
        ],
        [
          'email_user' => 'tavoni@bdoctors.it',
          'name' => 'Daniela',
          'surname' => 'Marconi',
          'email' => 'daniela.marconi@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-04-18 18:47:53'
        ],
        [
          'email_user' => 'tavoni@bdoctors.it',
          'name' => 'Giorgio',
          'surname' => 'Canta',
          'email' => 'giorgio.canta@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-04-21 17:28:53'
        ],

        // niccolò
        [
          'email_user' => 'delfino@bdoctors.it',
          'name' => 'Maria',
          'surname' => 'Rossi',
          'email' => 'maria.rossi@gmail.com',
          'phone_num' => '+39 338 252 2355',
          'message' => 'Grazie di tutto dottore',
          'created_at' => '2020-03-27 13:07:27'
        ],
        [
          'email_user' => 'delfino@bdoctors.it',
          'name' => 'Alessandro',
          'surname' => 'Bianchi',
          'email' => 'alessandro.bianchi@gmail.com',
          'phone_num' => '+39 340 153 1937',
          'message' => 'Dottore ho perso il suo numero di telefono, me lo può ridare?',
          'created_at' => '2020-11-23 09:09:10'
        ],
        [
          'email_user' => 'delfino@bdoctors.it',
          'name' => 'Luisa',
          'surname' => 'Marconi',
          'email' => 'luisa.marconi@gmail.com',
          'phone_num' => '+39 340 234 1937',
          'message' => 'Dottore quando ci possiamo vedere?',
          'created_at' => '2021-01-13 11:43:53'
        ],
        [
          'email_user' => 'delfino@bdoctors.it',
          'name' => 'Giorgio',
          'surname' => 'Canta',
          'email' => 'giorgio.canta@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-02-08 04:07:53'
        ],
        [
          'email_user' => 'delfino@bdoctors.it',
          'name' => 'Fabio',
          'surname' => 'Marino',
          'email' => 'fabio.marino@gmail.com',
          'phone_num' => '+39 340 233 3235',
          'message' => 'Dottore come si chiamava quella medicina?',
          'created_at' => '2021-02-14 15:39:53'
        ],
        [
          'email_user' => 'delfino@bdoctors.it',
          'name' => 'Mario',
          'surname' => 'Rossi',
          'email' => 'mario.rossi@gmail.com',
          'phone_num' => '+39 340 210 1029',
          'message' => 'Salve dottore. Vorrei fissare una visita medica per la prossima settimana. Può indicarmi le sue disponibilità?',
          'created_at' => '2021-02-26 16:59:53'
        ],
        [
          'email_user' => 'delfino@bdoctors.it',
          'name' => 'Daniela',
          'surname' => 'Marconi',
          'email' => 'daniela.marconi@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Dottore oggi va meglio. Devo continuare con al terapia?',
          'created_at' => '2021-03-14 14:07:53'
        ],
        [
          'email_user' => 'delfino@bdoctors.it',
          'name' => 'Maria',
          'surname' => 'Rossi',
          'email' => 'maria.rossi@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-03-18 07:28:30'
        ],
        [
          'email_user' => 'delfino@bdoctors.it',
          'name' => 'Martina',
          'surname' => 'Verdi',
          'email' => 'martina.verdi@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-04-24 10:07:53'
        ],
        [
          'email_user' => 'delfino@bdoctors.it',
          'name' => 'Marco',
          'surname' => 'Marino',
          'email' => 'giorgio.marino@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-04-16 19:32:53'
        ],
        [
          'email_user' => 'delfino@bdoctors.it',
          'name' => 'Giorgio',
          'surname' => 'Canta',
          'email' => 'giorgio.canta@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-04-18 18:47:53'
        ],
        [
          'email_user' => 'delfino@bdoctors.it',
          'name' => 'Antonio',
          'surname' => 'Di Pasquale',
          'email' => 'antonio.dipasquale@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-04-21 17:28:53'
        ],
        // niccolò

        // Giacomo
        [
          'email_user' => 'biffi@bdoctors.it',
          'name' => 'Maria',
          'surname' => 'Rossi',
          'email' => 'maria.rossi@gmail.com',
          'phone_num' => '+39 338 252 2355',
          'message' => 'Grazie di tutto dottore',
          'created_at' => '2020-03-27 13:07:27'
        ],
        [
          'email_user' => 'biffi@bdoctors.it',
          'name' => 'Alessandro',
          'surname' => 'Bianchi',
          'email' => 'alessandro.bianchi@gmail.com',
          'phone_num' => '+39 340 153 1937',
          'message' => 'Dottore ho perso il suo numero di telefono, me lo può ridare?',
          'created_at' => '2020-11-23 09:09:10'
        ],
        [
          'email_user' => 'biffi@bdoctors.it',
          'name' => 'Luisa',
          'surname' => 'Marconi',
          'email' => 'luisa.marconi@gmail.com',
          'phone_num' => '+39 340 234 1937',
          'message' => 'Dottore quando ci possiamo vedere?',
          'created_at' => '2021-01-13 11:43:53'
        ],
        [
          'email_user' => 'biffi@bdoctors.it',
          'name' => 'Giorgio',
          'surname' => 'Canta',
          'email' => 'giorgio.canta@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-02-08 04:07:53'
        ],
        [
          'email_user' => 'biffi@bdoctors.it',
          'name' => 'Fabio',
          'surname' => 'Marino',
          'email' => 'fabio.marino@gmail.com',
          'phone_num' => '+39 340 233 3235',
          'message' => 'Dottore come si chiamava quella medicina?',
          'created_at' => '2021-02-14 15:39:53'
        ],
        [
          'email_user' => 'biffi@bdoctors.it',
          'name' => 'Mario',
          'surname' => 'Rossi',
          'email' => 'mario.rossi@gmail.com',
          'phone_num' => '+39 340 210 1029',
          'message' => 'Salve dottore. Vorrei fissare una visita medica per la prossima settimana. Può indicarmi le sue disponibilità?',
          'created_at' => '2021-02-26 16:59:53'
        ],
        [
          'email_user' => 'biffi@bdoctors.it',
          'name' => 'Maria',
          'surname' => 'Meloni',
          'email' => 'maria.meloni@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-03-14 14:07:53'
        ],
        [
          'email_user' => 'biffi@bdoctors.it',
          'name' => 'Marta',
          'surname' => 'Bianchi',
          'email' => 'marta.bianchi@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Grazie di tutto dottore',
          'created_at' => '2021-03-18 07:28:30'
        ],
        [
          'email_user' => 'biffi@bdoctors.it',
          'name' => 'Marco',
          'surname' => 'Verdi',
          'email' => 'marco.verdi@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Dottore avrei bisogno di un certificato sportivo, quando possiamo vederci?',
          'created_at' => '2021-04-24 10:07:53'
        ],
        [
          'email_user' => 'biffi@bdoctors.it',
          'name' => 'Sofia',
          'surname' => 'Bianchi',
          'email' => 'sofia.bianchi@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'La prossima settimana fa visite?',
          'created_at' => '2021-04-16 19:32:53'
        ],
        [
          'email_user' => 'biffi@bdoctors.it',
          'name' => 'Giorgio',
          'surname' => 'Canta',
          'email' => 'giorgio.canta@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-04-18 18:47:53'
        ],
        [
          'email_user' => 'biffi@bdoctors.it',
          'name' => 'Massimo',
          'surname' => 'Gialli',
          'email' => 'massimo.gialli@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-04-21 17:28:53'
        ],
        // Giacomo

        // Samuel
        [
          'email_user' => 'gbadamosi@bdoctors.it',
          'name' => 'Maria',
          'surname' => 'Rossi',
          'email' => 'maria.rossi@gmail.com',
          'phone_num' => '+39 338 252 2355',
          'message' => 'Grazie di tutto dottore',
          'created_at' => '2020-03-27 13:07:27'
        ],
        [
          'email_user' => 'gbadamosi@bdoctors.it',
          'name' => 'Alessandro',
          'surname' => 'Bianchi',
          'email' => 'alessandro.bianchi@gmail.com',
          'phone_num' => '+39 340 153 1937',
          'message' => 'Dottore ho perso il suo numero di telefono, me lo può ridare?',
          'created_at' => '2020-11-23 09:09:10'
        ],
        [
          'email_user' => 'gbadamosi@bdoctors.it',
          'name' => 'Luisa',
          'surname' => 'Marconi',
          'email' => 'luisa.marconi@gmail.com',
          'phone_num' => '+39 340 234 1937',
          'message' => 'Dottore quando ci possiamo vedere?',
          'created_at' => '2021-01-13 11:43:53'
        ],
        [
          'email_user' => 'gbadamosi@bdoctors.it',
          'name' => 'Giorgio',
          'surname' => 'Canta',
          'email' => 'giorgio.canta@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-02-08 04:07:53'
        ],
        [
          'email_user' => 'gbadamosi@bdoctors.it',
          'name' => 'Fabio',
          'surname' => 'Marino',
          'email' => 'fabio.marino@gmail.com',
          'phone_num' => '+39 340 233 3235',
          'message' => 'Dottore come si chiamava quella medicina?',
          'created_at' => '2021-02-14 15:39:53'
        ],
        [
          'email_user' => 'gbadamosi@bdoctors.it',
          'name' => 'Mario',
          'surname' => 'Rossi',
          'email' => 'mario.rossi@gmail.com',
          'phone_num' => '+39 340 210 1029',
          'message' => 'Salve dottore. Vorrei fissare una visita medica per la prossima settimana. Può indicarmi le sue disponibilità?',
          'created_at' => '2021-02-26 16:59:53'
        ],
        [
          'email_user' => 'gbadamosi@bdoctors.it',
          'name' => 'Daniela',
          'surname' => 'Marconi',
          'email' => 'daniela.marconi@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Dottore oggi va meglio. Devo continuare con al terapia?',
          'created_at' => '2021-03-14 14:07:53'
        ],
        [
          'email_user' => 'gbadamosi@bdoctors.it',
          'name' => 'Maria',
          'surname' => 'Rossi',
          'email' => 'maria.rossi@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-03-18 07:28:30'
        ],
        [
          'email_user' => 'gbadamosi@bdoctors.it',
          'name' => 'Martina',
          'surname' => 'Verdi',
          'email' => 'martina.verdi@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-04-24 10:07:53'
        ],
        [
          'email_user' => 'gbadamosi@bdoctors.it',
          'name' => 'Marco',
          'surname' => 'Marino',
          'email' => 'giorgio.marino@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-04-16 19:32:53'
        ],
        [
          'email_user' => 'gbadamosi@bdoctors.it',
          'name' => 'Giorgio',
          'surname' => 'Canta',
          'email' => 'giorgio.canta@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-04-18 18:47:53'
        ],
        [
          'email_user' => 'gbadamosi@bdoctors.it',
          'name' => 'Antonio',
          'surname' => 'Di Pasquale',
          'email' => 'antonio.dipasquale@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-04-21 17:28:53'
        ],
        // Samuel

        // Vincenzo
        [
          'email_user' => 'donato@bdoctors.it',
          'name' => 'Maria',
          'surname' => 'Rossi',
          'email' => 'maria.rossi@gmail.com',
          'phone_num' => '+39 338 252 2355',
          'message' => 'Grazie di tutto dottore',
          'created_at' => '2020-03-27 13:07:27'
        ],
        [
          'email_user' => 'donato@bdoctors.it',
          'name' => 'Alessandra',
          'surname' => 'Bianchi',
          'email' => 'alessandra.bianchi@gmail.com',
          'phone_num' => '+39 340 153 1937',
          'message' => 'Dottore ho perso il suo numero di telefono, me lo può ridare?',
          'created_at' => '2020-11-23 09:09:10'
        ],
        [
          'email_user' => 'donato@bdoctors.it',
          'name' => 'Luisa',
          'surname' => 'Marconi',
          'email' => 'luisa.marconi@gmail.com',
          'phone_num' => '+39 340 234 1937',
          'message' => 'Dottore quando ci possiamo vedere?',
          'created_at' => '2021-01-13 11:43:53'
        ],
        [
          'email_user' => 'donato@bdoctors.it',
          'name' => 'Giorgia',
          'surname' => 'Canta',
          'email' => 'giorgia.canta@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-02-08 04:07:53'
        ],
        [
          'email_user' => 'donato@bdoctors.it',
          'name' => 'Fabia',
          'surname' => 'Marino',
          'email' => 'fabia.marino@gmail.com',
          'phone_num' => '+39 340 233 3235',
          'message' => 'Dottore come si chiamava quella medicina?',
          'created_at' => '2021-02-14 15:39:53'
        ],
        [
          'email_user' => 'donato@bdoctors.it',
          'name' => 'Maria',
          'surname' => 'Rossi',
          'email' => 'maria.rossi@gmail.com',
          'phone_num' => '+39 340 210 1029',
          'message' => 'Salve dottore. Vorrei fissare una visita medica per la prossima settimana. Può indicarmi le sue disponibilità?',
          'created_at' => '2021-02-26 16:59:53'
        ],
        [
          'email_user' => 'donato@bdoctors.it',
          'name' => 'Daniela',
          'surname' => 'Marconi',
          'email' => 'daniela.marconi@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Dottore oggi va meglio. Devo continuare con al terapia?',
          'created_at' => '2021-03-14 14:07:53'
        ],
        [
          'email_user' => 'donato@bdoctors.it',
          'name' => 'Cristina',
          'surname' => 'Bulsabur',
          'email' => 'cris.pokemonslove@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Grande trattamento e terapia ottimale',
          'created_at' => '2021-03-18 07:28:30'
        ],
        [
          'email_user' => 'donato@bdoctors.it',
          'name' => 'Elisabetta',
          'surname' => 'Mitraglietta',
          'email' => 'elisabetta.mitraleggera@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Quando posso venire?',
          'created_at' => '2021-04-24 10:07:53'
        ],
        [
          'email_user' => 'donato@bdoctors.it',
          'name' => 'Marca',
          'surname' => 'Marino',
          'email' => 'giorgia.marino@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-04-16 19:32:53'
        ],
        [
          'email_user' => 'donato@bdoctors.it',
          'name' => 'Giorgia',
          'surname' => 'Canta',
          'email' => 'giorgia.canta@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-04-18 18:47:53'
        ],
        [
          'email_user' => 'donato@bdoctors.it',
          'name' => 'Antonia',
          'surname' => 'Di Pasquale',
          'email' => 'antonia.dipasquale@gmail.com',
          'phone_num' => '+39 339 157 5235',
          'message' => 'Ci vediamo domani?',
          'created_at' => '2021-04-21 17:28:53'
        ],


      ];

      // creo più istanze dell'oggetto Message con i dati fittizzi creati sopra
      foreach ($messages as $message) {
        $newMessages = new Message();

        $newMessages->email_user = $message['email_user'];
        $newMessages->name = $message['name'];
        $newMessages->surname = $message['surname'];
        $newMessages->email = $message['email'];
        $newMessages->phone_num = $message['phone_num'];
        $newMessages->message = $message['message'];
        $newMessages->created_at = $message['created_at'];

        // salvo i valori nella tabella
        $newMessages->save();

      }

    }
}
