<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Doctor;
use App\Review;
use App\User;
use App\Lead;
use App\Mail\SendNewMail;


class PageController extends Controller
{
    // PUBLIC FUCTION INDEX DOTTORI LATI VISITATORE
    public function index()
    {

        // Recupero dati Profilo medico e Uffici
        $profilo = Doctor::all();

        // Array associativa per dati
        $data = [
            'profilo' => $profilo,
        ];

        // Reindirizzo la pagina con dati
        return view('guest.doctor.index', $data);

    }

    // PUBLIC FUCTION VISUALIZZA PROFILI PROMO
    public function promo()
    {

        // Recupero dati Profilo medico e Uffici
        $profilo = Doctor::all();
        $data = Carbon::now();
        // Array associativa per dati
        $data = [
            'profilo' => $profilo,
            'data' => $data
        ];

        // Reindirizzo la pagina con dati
        return view('guest.doctor.promoDoctor', $data);

    }

    // PUBLIC FUCTION PER VISUALIZZARE IL CV MEDICO
    public function showProfile($id)
    {

        // Recupero il medico tramite  id
        $doctor = Doctor::where('id',$id)->get();
        $review = Review::all();

        // Array associativo per dati
        $data = [
            'doctor' => $doctor,
            'reviews' => $review,
        ];

        // Reindirizzo alla pagina con dati
        return view ('guest.doctor.show',$data);

    }

    // PUBLIC FUCTION RICERCA DOTTORE PER CITTA
    public function search(Request $request)
    {
        // Recupero dato form
        $search = $request->all();

        // Recupero dottore
        $doctor = Doctor::where('specialization' ,'like', $search['search'])->orWhere('user_name','like',$search['search'])->get();

        // Arrai associativo
        $data = [
            'doctor' => $doctor,
            'search' => $search
        ];

        // Reindirizzo pag con dati
        return view('search',$data);
    }

    // PUBLIC FUCTION PAGINA SPECIALIZZAZIONE
    public function specializzazioni(){
        return view('specializzazioni');
    }

    // PUBLIC FUCTION PAGINA ABOUT US
    public function aboutUs(){
        return view('about_us');
    }

    // PUBLIC FUCTION CONTATTI
    public function contatti(){
        return view ('contatti');
    }

    // PUBLIC FUCTION CONTATTI
    public function contattiSent(Request $request){
        $data = $request->all();
        // dd($data);
        $newLead = new Lead();
        $newLead->fill($data);
        $newLead->save();

        Mail::to('info@booldoctors.it')->send(new SendNewMail($newLead));

        return redirect()->route('contatti.page');

    }

    // PUBLIC FUCTION NEWS
    public function news(){
        return view ('news');
    }

}
