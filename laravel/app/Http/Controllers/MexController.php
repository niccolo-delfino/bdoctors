<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MexController extends Controller
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
    // PUBLIC FUCTION CREA MESSAGGIO LATO VISITATORE 
    public function store(Request $request)
    {
        
        // Recupero i dati dal form 
        $data = $request->all();

        // Verifica validate 
        $request->validate([
            'email_user'=>'required',
            'email'=>'required|max:50',
            'name'=>'required|max:50',
            'surname'=>'required|max:50',
            'message'=>'required',
        ]);

        // Creo un nuovo messaggio 
        $newMex = New Message();

        // Memorizzo i dati form nel nuovo messaggio 
        $newMex->fill($data);

        // Salvo il nuovo messaggio 
        $newMex->save();

        // Reindirizzo la pag con status 
        return redirect()->route('show.doctors')->with('status', 'Messaggio Inviato');

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
