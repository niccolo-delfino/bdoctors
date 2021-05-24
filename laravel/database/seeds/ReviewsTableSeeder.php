<?php

use Illuminate\Database\Seeder;
use App\Review;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // creo un array con recensioni fittizie
      $reviews = [
        // giulio
        [
          'user_id' => 1,
          'email_user' => 'tavoni@bdoctors.it',
          'text' => 'Persona molto professionale e disponibile.',
          'vote' => '4',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 1,
          'email_user' => 'tavoni@bdoctors.it',
          'text' => 'Ottimo professionista, affidabile e disponibile.',
          'vote' => '5',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 1,
          'email_user' => 'tavoni@bdoctors.it',
          'text' => 'Molto disponibile, gentile e professionale. Fa sentire al suo agio anche i bambini.',
          'vote' => '5',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 1,
          'email_user' => 'tavoni@bdoctors.it',
          'text' => 'Negato',
          'vote' => '1',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 1,
          'email_user' => 'tavoni@bdoctors.it',
          'text' => 'Ottimo dottore!',
          'vote' => '5',
          'created_at' => '2021-01-14 13:07:53'
        ],
        [
          'user_id' => 1,
          'email_user' => 'tavoni@bdoctors.it',
          'text' => 'Inteligente ma non si applica',
          'vote' => '3',
          'created_at' => '2021-01-14 13:07:53'
        ],
        [
          'user_id' => 1,
          'email_user' => 'tavoni@bdoctors.it',
          'text' => 'Molto disponibile, gentile e professionale. Fa sentire al suo agio anche i bambini.',
          'vote' => '5',
          'created_at' => '2021-02-14 13:07:53'
        ],
        [
          'user_id' => 1,
          'email_user' => 'tavoni@bdoctors.it',
          'text' => 'Ottimo',
          'vote' => '4',
          'created_at' => '2021-03-14 13:07:53'
        ],
        [
          'user_id' => 1,
          'email_user' => 'tavoni@bdoctors.it',
          'text' => 'Farei una vita a dire "MHA"',
          'vote' => '1',
          'created_at' => '2021-03-14 13:07:53'
        ],
        [
          'user_id' => 1,
          'email_user' => 'tavoni@bdoctors.it',
          'text' => '',
          'vote' => '3',
          'created_at' => '2021-03-14 13:07:53'
        ],
        [
          'user_id' => 1,
          'email_user' => 'tavoni@bdoctors.it',
          'text' => 'Ottimo',
          'vote' => '5',
          'created_at' => '2021-04-14 13:07:53'
        ],
        [
          'user_id' => 1,
          'email_user' => 'tavoni@bdoctors.it',
          'text' => 'Magnifico',
          'vote' => '5',
          'created_at' => '2021-04-14 13:07:53'
        ],
        // samuel
        [
          'user_id' => 2,
          'email_user' => 'gbadamosi@bdoctors.it',
          'text' => 'Persona molto professionale e disponibile.',
          'vote' => '4',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 2,
          'email_user' => 'gbadamosi@bdoctors.it',
          'text' => 'Ottimo professionista, affidabile e disponibile.',
          'vote' => '5',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 2,
          'email_user' => 'gbadamosi@bdoctors.it',
          'text' => 'Molto disponibile, gentile e professionale. Fa sentire al suo agio anche i bambini.',
          'vote' => '5',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 2,
          'email_user' => 'gbadamosi@bdoctors.it',
          'text' => 'Assente',
          'vote' => '1',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 2,
          'email_user' => 'gbadamosi@bdoctors.it',
          'text' => 'Ottimo dottore!',
          'vote' => '5',
          'created_at' => '2021-01-14 13:07:53'
        ],
        [
          'user_id' => 2,
          'email_user' => 'gbadamosi@bdoctors.it',
          'text' => 'Quando si presenta è bravo',
          'vote' => '3',
          'created_at' => '2021-01-14 13:07:53'
        ],
        [
          'user_id' => 2,
          'email_user' => 'gbadamosi@bdoctors.it',
          'text' => 'Molto disponibile, gentile e professionale. Fa sentire al suo agio anche i bambini.',
          'vote' => '5',
          'created_at' => '2021-02-14 13:07:53'
        ],
        [
          'user_id' => 2,
          'email_user' => 'gbadamosi@bdoctors.it',
          'text' => 'Ottimo professionista, affidabile e disponibile.',
          'vote' => '4',
          'created_at' => '2021-03-14 13:07:53'
        ],
        [
          'user_id' => 2,
          'email_user' => 'gbadamosi@bdoctors.it',
          'text' => '',
          'vote' => '1',
          'created_at' => '2021-03-14 13:07:53'
        ],
        [
          'user_id' => 2,
          'email_user' => 'gbadamosi@bdoctors.it',
          'text' => 'Ottimo professionista, affidabile e disponibile.',
          'vote' => '3',
          'created_at' => '2021-03-14 13:07:53'
        ],
        [
          'user_id' => 2,
          'email_user' => 'gbadamosi@bdoctors.it',
          'text' => '',
          'vote' => '5',
          'created_at' => '2021-04-14 13:07:53'
        ],
        [
          'user_id' => 2,
          'email_user' => 'gbadamosi@bdoctors.it',
          'text' => 'Ottimo professionista, affidabile e disponibile.',
          'vote' => '5',
          'created_at' => '2021-04-14 13:07:53'
        ],
        // niccolò
        [
          'user_id' => 3,
          'email_user' => 'delfino@bdoctors.it',
          'text' => 'Persona molto professionale e disponibile.',
          'vote' => '4',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 3,
          'email_user' => 'delfino@bdoctors.it',
          'text' => 'Ottimo professionista, affidabile e disponibile.',
          'vote' => '5',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 3,
          'email_user' => 'delfino@bdoctors.it',
          'text' => 'Molto disponibile, gentile e professionale. Fa sentire al suo agio anche i bambini.',
          'vote' => '5',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 3,
          'email_user' => 'delfino@bdoctors.it',
          'text' => 'Ottimo professionista, affidabile e disponibile.',
          'vote' => '1',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 3,
          'email_user' => 'delfino@bdoctors.it',
          'text' => 'Ottimo dottore!',
          'vote' => '5',
          'created_at' => '2021-01-14 13:07:53'
        ],
        [
          'user_id' => 3,
          'email_user' => 'delfino@bdoctors.it',
          'text' => 'Ottimo professionista, affidabile e disponibile.',
          'vote' => '3',
          'created_at' => '2021-01-14 13:07:53'
        ],
        [
          'user_id' => 3,
          'email_user' => 'delfino@bdoctors.it',
          'text' => 'Molto disponibile, gentile e professionale. Fa sentire al suo agio anche i bambini.',
          'vote' => '5',
          'created_at' => '2021-02-14 13:07:53'
        ],
        [
          'user_id' => 3,
          'email_user' => 'delfino@bdoctors.it',
          'text' => 'Ottimo professionista, affidabile e disponibile.',
          'vote' => '4',
          'created_at' => '2021-03-14 13:07:53'
        ],
        [
          'user_id' => 3,
          'email_user' => 'delfino@bdoctors.it',
          'text' => 'Ottimo professionista, affidabile e disponibile.',
          'vote' => '1',
          'created_at' => '2021-03-14 13:07:53'
        ],
        [
          'user_id' => 3,
          'email_user' => 'delfino@bdoctors.it',
          'text' => '',
          'vote' => '3',
          'created_at' => '2021-03-14 13:07:53'
        ],
        [
          'user_id' => 3,
          'email_user' => 'delfino@bdoctors.it',
          'text' => 'Ottimo professionista, affidabile e disponibile.',
          'vote' => '5',
          'created_at' => '2021-04-14 13:07:53'
        ],
        [
          'user_id' => 3,
          'email_user' => 'delfino@bdoctors.it',
          'text' => 'Ottimo professionista, affidabile e disponibile.',
          'vote' => '5',
          'created_at' => '2021-04-14 13:07:53'
        ],
        // giacomo
        [
          'user_id' => 4,
          'email_user' => 'biffi@bdoctors.it',
          'text' => 'Persona molto professionale e disponibile.',
          'vote' => '4',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 4,
          'email_user' => 'biffi@bdoctors.it',
          'text' => 'Ottimo professionista, affidabile e disponibile.',
          'vote' => '5',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 4,
          'email_user' => 'biffi@bdoctors.it',
          'text' => 'Molto disponibile, gentile e professionale. Fa sentire al suo agio anche i bambini.',
          'vote' => '5',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 4,
          'email_user' => 'biffi@bdoctors.it',
          'text' => 'Molto disponibile, gentile e professionale. Fa sentire a suo agio anche i bambini.',
          'vote' => '1',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 4,
          'email_user' => 'biffi@bdoctors.it',
          'text' => 'Ottimo dottore!',
          'vote' => '5',
          'created_at' => '2021-01-14 13:07:53'
        ],
        [
          'user_id' => 4,
          'email_user' => 'biffi@bdoctors.it',
          'text' => 'Molto disponibile, gentile e professionale. Fa sentire a suo agio anche i bambini.',
          'vote' => '3',
          'created_at' => '2021-01-14 13:07:53'
        ],
        [
          'user_id' => 4,
          'email_user' => 'biffi@bdoctors.it',
          'text' => 'Molto disponibile, gentile e professionale. Fa sentire al suo agio anche i bambini.',
          'vote' => '5',
          'created_at' => '2021-02-14 13:07:53'
        ],
        [
          'user_id' => 4,
          'email_user' => 'biffi@bdoctors.it',
          'text' => 'Molto disponibile, gentile e professionale. Fa sentire a suo agio anche i bambini.',
          'vote' => '4',
          'created_at' => '2021-03-14 13:07:53'
        ],
        [
          'user_id' => 4,
          'email_user' => 'biffi@bdoctors.it',
          'text' => 'Molto disponibile, gentile e professionale. Fa sentire a suo agio anche i bambini.',
          'vote' => '1',
          'created_at' => '2021-03-14 13:07:53'
        ],
        [
          'user_id' => 4,
          'email_user' => 'biffi@bdoctors.it',
          'text' => '',
          'vote' => '3',
          'created_at' => '2021-03-14 13:07:53'
        ],
        [
          'user_id' => 4,
          'email_user' => 'biffi@bdoctors.it',
          'text' => 'Molto disponibile, gentile e professionale. Fa sentire a suo agio anche i bambini.',
          'vote' => '5',
          'created_at' => '2021-04-14 13:07:53'
        ],
        [
          'user_id' => 4,
          'email_user' => 'biffi@bdoctors.it',
          'text' => 'Ottimo Dottore',
          'vote' => '5',
          'created_at' => '2021-04-14 13:07:53'
        ],
        // donato
        [
          'user_id' => 5,
          'email_user' => 'biffi@bdoctors.it',
          'text' => 'Persona molto professionale e disponibile.',
          'vote' => '4',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 5,
          'email_user' => 'donato@bdoctors.it',
          'text' => 'Ottimo professionista, affidabile e disponibile.',
          'vote' => '5',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 5,
          'email_user' => 'donato@bdoctors.it',
          'text' => 'Molto disponibile, gentile e professionale. Fa sentire al suo agio anche i bambini.',
          'vote' => '5',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 5,
          'email_user' => 'donato@bdoctors.it',
          'text' => 'Professionale, attraente e grande spirito di squadra. Consigliatissimo',
          'vote' => '5',
          'created_at' => '2020-02-14 13:07:53'
        ],
        [
          'user_id' => 5,
          'email_user' => 'donato@bdoctors.it',
          'text' => 'Ottimo dottore!',
          'vote' => '5',
          'created_at' => '2021-01-14 13:07:53'
        ],
        [
          'user_id' => 5,
          'email_user' => 'donato@bdoctors.it',
          'text' => 'Professionale, attraente e grande spirito di squadra. Consigliatissimo',
          'vote' => '3',
          'created_at' => '2021-01-14 13:07:53'
        ],
        [
          'user_id' => 5,
          'email_user' => 'donato@bdoctors.it',
          'text' => 'Molto disponibile, gentile e professionale. Fa sentire al suo agio anche i bambini.',
          'vote' => '5',
          'created_at' => '2021-02-14 13:07:53'
        ],
        [
          'user_id' => 5,
          'email_user' => 'donato@bdoctors.it',
          'text' => 'Professionale, attraente e grande spirito di squadra. Consigliatissimo',
          'vote' => '4',
          'created_at' => '2021-03-14 13:07:53'
        ],
        [
          'user_id' => 5,
          'email_user' => 'donato@bdoctors.it',
          'text' => 'Professionale, attraente e grande spirito di squadra. Consigliatissimo',
          'vote' => '1',
          'created_at' => '2021-03-14 13:07:53'
        ],
        [
          'user_id' => 5,
          'email_user' => 'donato@bdoctors.it',
          'text' => 'Professionale, attraente e grande spirito di squadra. Consigliatissimo',
          'vote' => '3',
          'created_at' => '2021-03-14 13:07:53'
        ],
        [
          'user_id' => 5,
          'email_user' => 'donato@bdoctors.it',
          'text' => 'Professionale, attraente e grande spirito di squadra. Consigliatissimo',
          'vote' => '5',
          'created_at' => '2021-04-14 13:07:53'
        ],
        [
          'user_id' => 5,
          'email_user' => 'donato@bdoctors.it',
          'text' => 'Professionale, attraente e grande spirito di squadra. Consigliatissimo',
          'vote' => '5',
          'created_at' => '2021-04-14 13:07:53'
        ]
      ];

      // creo più istanze dell'oggetto Review con i dati fittizzi creati sopra
      foreach ($reviews as $review) {
       $newReview = new Review();

       $newReview->user_id = $review['user_id'];
       $newReview->email_user = $review['email_user'];
       $newReview->text = $review['text'];
       $newReview->vote = $review['vote'];
       $newReview->created_at = $review['created_at'];

       // salvo i valori nella tabella
       $newReview->save();

     }

    }
}
