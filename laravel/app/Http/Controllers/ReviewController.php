<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\User;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // PUBLIC FUCTION CREAZIONE RECENSIONE LATO VISITATORE 
    public function store(Request $request)
    {
        // Recupero tutti i dati del form 
        $data = $request->all();
        $user = User::where('email', $data['email_user'])->get();


        // Controllo validate 
        $request->validate([
            'email_user'=>'required',
            'vote'=>'required|max:1',
        ]);

        // Creo una nuova recensione 
        $newReview = New Review();

        // Memorizzo i dati form nella nuova rencesione 
        $newReview->fill($data);
        $newReview->user_id = $user[0]['id'];
        $newReview->save();

        // Reindirizzo la pagina con status 
        return redirect()->route('show.doctors')->with('review', 'Recensione Inviata');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
