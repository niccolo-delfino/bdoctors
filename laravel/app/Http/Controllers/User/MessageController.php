<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Message;
use App\User;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // PUBLIC FUCTION PER MESSAGGI LATO USER 
    public function index()
    {
        // Recupero id utente registrato per elaborazione dati 
        $id = Auth::id();

        // Recupero Tutti i dati del user loggato 
        $user = User::where('id', $id)->orderBy('created_at', 'desc')->get();

        // Recupero tutti i messaggi e li ordino in ordine decrescente 
        $messages = Message::orderBy('created_at' ,'desc')->get();

        // Array associativa per dati 
        $data = [
            'user' => $user,
            'message' => $messages
        ];

        // Indirizzo a Index dei messaggi 
        return view('messages.index',$data);
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
    public function store(Request $request)
    {
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

    // PUBLIC FUCTION PER ELIMINARE MEX SELEZIONATO 
    public function destroy($id)
    {
        // Recupero il messaggio tramite $id 
        $message = Message::find($id);

        // Cancello il messaggio 
        $message->delete();

        // Reindirizzo la pag al index dei messaggi con uno status
        return redirect()->route('message.index')->with('status','Messaggio Cancellato');
    }
}


