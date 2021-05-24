<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Doctor;
use App\Specialization;
use App\Service;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // PUBLIC FUCTION LATO USER PER VIEW PROFILO
    public function index()
    {
      // Recupero id utente loggato
      $id = Auth::id();

      // Recupero profilo del dottore 
      $profilo = Doctor::where('user_id', $id)->orderBy('created_at', 'asc')->get();

      // Array associativa 
      $data = [
        'profilo' => $profilo,
      ];

      // Reindirizzo la pag a index con dati 
      return view('user.profile.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // PUBLIC FUCTION CREATE PROFILO
    public function create()
    {
      // Prendo tutte le specializzazioni e i servizi
      $service = Service::all();
      $specialization = Specialization::all();

      // Array associativo per poter ciclare i dati in create.php
      $data =
      [
        'services' => $service,
        'specializations' => $specialization
      ];

      // Ritorno view passato i data inseriti
      return view('user.profile.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // PUBLIC FUCTION PER CARICARE IL PROFILO
    public function store(Request $request)
    {
      // prendo tutti i data dalla injection
      $data = $request->all();

      // recupero id user
      $id = Auth::id();

      // criteri di validazioni fillable
      $request->validate(
        [
          'user_name'=>'required|max:50',
          'office_address'=>'required|max:50',
          'city'=>'required|max:20',
          'phone_num'=>'required|max:20',
          'specialization'=>'required|max:20',
          'cv' => 'required',
          'photo' => 'required'
        ]);

      // inizializzo un nuovo profilo dottore in una variabile
      $newDoctor = new Doctor();

      // sincronizzo id del nuovo profilo del dottore
      // al suo id d'iscrizione
      $newDoctor->user_id= $id;

      // Imp per store img photo
      $photo = Storage::put('img', $data['photo']);
      $data['photo'] = $photo;

      // Imp per store pdf cv
      $cv = Storage::put('cv', $data['cv']);
      $data['cv'] = $cv;

      // Memorizzo tutti i dati del form 
      $newDoctor->fill($data);

      // Salvo tutti i dati del form 
      $newDoctor->save();

      // Memorizzo le relazioni molti a molti con le specializzazioni 
      if(array_key_exists('specializations',$data)){
        $newDoctor->specializations()->sync($data['specializations']);
      }

      // Memorizzo le relazioni molti a molti con i servizzi
      if(array_key_exists('services',$data)){
        $newDoctor->services()->sync($data['services']);
      }

      // Reindirizzo alla pag con status
      return redirect()->route('profilo.index')->with('status', 'Profilo creato correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // PUBLIC FUCTION VISUALIZZA CV 
    public function show($id)
    {
        // Recupero profilo
        $doctor = Doctor::find($id);

        // Array associativo 
        $data = [
          'profile' => $doctor
        ];

        // Reindirizzo alla page con dati 
        return view('user.profile.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // PUBLIC FUCTION MODIFICA PROFILO 
    public function edit($id)
    {
      //  Recupero il profilo  
      $doctor = Doctor::find($id);

      // Prendo tutte le specializzazioni e i servizi
      $specialization = Specialization::all();
      $service = Service::all();

      // Array associativo per poter ciclare i dati in create.php
      $data =
      [
        'doctor' => $doctor,
        'specializations' => $specialization,
        'services' => $service,
      ];

      // Reindirizzo la pag con dati 
      return view('user.profile.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // PUBLIC FUCTION CARICA MODIFICHE STESSA FUNZIONE DI STORE 
    public function update(Request $request, $id)
    {

      // Recupero il profilo 
      $doctor = Doctor::find($id);

      // Recupero tutti i dati dal form 
      $data = $request->all();

      // Validate del form 
      $request->validate(
        [
          'user_name'=>'required|max:50',
          'office_address'=>'required|max:50',
          'city'=>'required|max:20',
          'phone_num'=>'required|max:20',
          'specialization'=>'required|max:20',
          'cv' => 'required',
          'photo' => 'required'
        ]);

      // Controllo img 
      if(array_key_exists('photo',$data)){
        $photo = Storage::put('img', $data['photo']);
        $data['photo'] = $photo;
      }

      // Controllo cv 
      if(array_key_exists('cv',$data)){
        $cv = Storage::put('cv', $data['cv']);
        $data['cv'] = $cv;
      }
      
      // Caricamento modifiche 
      $doctor->update($data);

      // Caricamento modifiche tabella ponte servizzi 
      if(array_key_exists('services',$data)){
        $doctor->services()->sync($data['services']);
      }

      // Reindirizzo pag con status 
      return redirect()->route('profilo.index')->with('status','Profilo Modificato Correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // PUBLIC FUCTION ELIMINA PROFILO 
    public function destroy($id)
    {

      // Trovo profilo 
      $doctor = Doctor::find($id);

      // Elimina specializzazioni e servizzi 
      $doctor->specializations()->sync([]);
      $doctor->services()->sync([]);

      //Elimino profilo
      $doctor->delete();

      // Reindirizzo la pag con status
      return redirect()->route('profilo.index')->with('status','Post Cancellato Correttamente');
      
    }
}
