<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Message;
use App\Review;
use App\Doctor;
use App\User;

class HomeController extends Controller
{
    // PUBLIC FUCTION PER HOME SITO 
    public function index()
    {
        // Recupero id dell'utente loggato per le mie visualizzazioni 
        $id = Auth::id();

        // Recupero il profilo del medico  
        $profilo = Doctor::where('user_id', $id)->orderBy('created_at', 'asc')->get();

        // Array associativa per dati 
        $data = [
            'profilo' => $profilo,
        ];
        
        // Reindirizzo la pagina alla index del user  
        return view('user.index', $data);
    }

    public function statistiche()
    {
      $id = Auth::id();
      $user= User::where('id' , $id)->get();

      $mex = Message::where('email_user' , $user[0]['email'])->get();
      $rev = Review::where('user_id' , $id)->get();

      $month = array('Gennaio', 'Febbraio', 'Marzo', 'Aprile');
      $year = array(2020, 2021);

      // CHART 1
      // array per memorizzare gli anni
      $memoMessagesYear = [];
      // ciclo per pushare gli anni
      foreach ($mex as $item) {
        array_push($memoMessagesYear, $item->created_at->year);
      }
      // funzione per contare i valori duplicati nell'array
      $messagesForYear = array_count_values($memoMessagesYear);


      // CHART 2
      $tempoMessagesMonths = [];
      $memoMessagesMonth = [];


      foreach ($mex as $item) {
        if ($item->created_at->year == 2021) {
          array_push($tempoMessagesMonths, $item->created_at->month);
        }
      }
      sort($tempoMessagesMonths);

      foreach ($tempoMessagesMonths as $item) {
        if ($item == '1') {
          $item = 'Gennaio';
        } elseif ($item == '2') {
          $item = 'Febbraio';
        } elseif ($item == '3') {
          $item = 'Marzo';
        } elseif ($item == '4') {
          $item = 'Aprile';
        } elseif ($item == '5') {
          $item = 'Maggio';
        } elseif ($item == '6') {
          $item = 'Giugno';
        } elseif ($item == '7') {
          $item = 'Luglio';
        } elseif ($item == '8') {
          $item = 'Agosto';
        } elseif ($item == '9') {
          $item = 'Settembre';
        } elseif ($item == '10') {
          $item = 'Ottobre';
        } elseif ($item == '11') {
          $item = 'Novembre';
        } elseif ($item == '12') {
          $item = 'Dicembre';
        }
        array_push($memoMessagesMonth, $item);
      }

      $messagesForMonth = array_count_values($memoMessagesMonth);

      // CHART 3
      $memoReviewsYear = [];

      foreach ($rev as $item) {
        array_push($memoReviewsYear, $item->created_at->year);
      }

      $reviewsForYear = array_count_values($memoReviewsYear);


      // CHART 4
      $tempoReviewsMonths = [];
      $memoReviewsMonth = [];

      foreach ($rev as $item) {
        if ($item->created_at->year == 2021) {
          array_push($tempoReviewsMonths, $item->created_at->month);
        }
      }
      sort($tempoReviewsMonths);

      foreach ($tempoReviewsMonths as $item) {
        if ($item == '1') {
          $item = 'Gennaio';
        } elseif ($item == '2') {
          $item = 'Febbraio';
        } elseif ($item == '3') {
          $item = 'Marzo';
        } elseif ($item == '4') {
          $item = 'Aprile';
        } elseif ($item == '5') {
          $item = 'Maggio';
        } elseif ($item == '6') {
          $item = 'Giugno';
        } elseif ($item == '7') {
          $item = 'Luglio';
        } elseif ($item == '8') {
          $item = 'Agosto';
        } elseif ($item == '9') {
          $item = 'Settembre';
        } elseif ($item == '10') {
          $item = 'Ottobre';
        } elseif ($item == '11') {
          $item = 'Novembre';
        } elseif ($item == '12') {
          $item = 'Dicembre';
        }
        array_push($memoReviewsMonth, $item);
      }

      $reviewsForMonth = array_count_values($memoReviewsMonth);

      // CHART 5
      $memoVotesPrevYear = [];
      $memoVotesCurrYear = [];

      foreach ($rev as $item) {
        if ($item->created_at->year == 2020) {
          array_push($memoVotesPrevYear, $item->vote);
        } elseif($item->created_at->year == 2021) {
          array_push($memoVotesCurrYear, $item->vote);
        }
      }

      if(count($rev) < 1){
        $averageVotesPrevYear = 0;

        $averageVotesCurrYear = 0;
      }
      else{
        $averageVotesPrevYear = array_sum($memoVotesPrevYear)/count($memoVotesPrevYear);

        $averageVotesCurrYear = array_sum($memoVotesCurrYear)/count($memoVotesCurrYear);
      }

      $votesForYear = array(
        round($averageVotesPrevYear, 1),
        round($averageVotesCurrYear, 1)
      );

      // CHART 6
      $memoVotesJan = [];
      $memoVotesFeb = [];
      $memoVotesMar = [];
      $memoVotesApr = [];

      foreach ($rev as $item) {
        if ($item->created_at->year == 2021) {
          if ($item->created_at->month == 1) {
            array_push($memoVotesJan, $item->vote);
          } elseif ($item->created_at->month == 2) {
            array_push($memoVotesFeb, $item->vote);
          } elseif ($item->created_at->month == 3) {
            array_push($memoVotesMar, $item->vote);
          } elseif ($item->created_at->month == 4) {
            array_push($memoVotesApr, $item->vote);
          }
        }
      }

      if(count($rev) < 1){
        $averageVotesJan = 0;
  
        $averageVotesFeb = 0;
  
        $averageVotesMar = 0;
  
        $averageVotesApr = 0;
      }
      else{
        $averageVotesJan = array_sum($memoVotesJan)/count($memoVotesJan);
  
        $averageVotesFeb = array_sum($memoVotesFeb)/count($memoVotesFeb);
  
        $averageVotesMar = array_sum($memoVotesMar)/count($memoVotesMar);
  
        $averageVotesApr = array_sum($memoVotesApr)/count($memoVotesApr);
      }


      $votesForMonth = array(
        round($averageVotesJan, 1),
        round($averageVotesFeb, 1),
        round($averageVotesMar, 1),
        round($averageVotesApr, 1)
      );

      // style chart
      $backgroundColorYear = array(
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
      );
      $borderColorYear = array(
        'rgba(255, 205, 86, 0.9)',
        'rgba(75, 192, 192, 0.9)',
      );
      $backgroundColorMonth = array(
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(0, 255, 238, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(201, 203, 207, 0.2)',
        'rgba(17, 19, 24, 0.2)',
        'rgba(53, 201, 170, 0.2)',
        'rgba(7, 110, 53, 0.2)',
        'rgba(255, 181, 0, 0.2)'
      );
      $borderColorMonth = array(
        'rgba(255, 99, 132, 0.9)',
        'rgba(255, 159, 64, 0.9)',
        'rgba(153, 102, 255, 0.9)',
        'rgba(0, 255, 238, 0.9)',
        'rgba(255, 205, 86, 0.9)',
        'rgba(75, 192, 192, 0.9)',
        'rgba(54, 162, 235, 0.9)',
        'rgba(201, 203, 207, 0.9)',
        'rgba(17, 19, 24, 0.9)',
        'rgba(53, 201, 170, 0.9)',
        'rgba(7, 110, 53, 0.9)',
        'rgba(255, 181, 0, 0.9)'
      );

      $data = [
        'item' => $user,
        'month' => $month,
        'year' => $year,
        // CHART 1
        'messagesForYear' => $messagesForYear,
        // CHART 2
        'messagesForMonth' => $messagesForMonth,
        // CHART 3
        'reviewsForYear' => $reviewsForYear,
        // CHART 4
        'reviewsForMonth' => $reviewsForMonth,
        // CHART 5
        'votesForYear' => $votesForYear,
        // CHART 6
        'votesForMonth' => $votesForMonth,
        // style chart
        'backgroundColorYear' => $backgroundColorYear,
        'borderColorYear' => $borderColorYear,
        'backgroundColorMonth' => $backgroundColorMonth,
        'borderColorMonth' => $borderColorMonth
      ];

      // Mando i dati alla pagina delle statistiche
      return view('user.statistiche', $data);
    }

}
