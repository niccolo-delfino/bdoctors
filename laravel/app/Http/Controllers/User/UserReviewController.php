<?php

namespace App\Http\Controllers\User;

use App\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Review;


class UserReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // PUBLIC FUCTION PER VIEW RECENSIONI
    public function index()
    {
        // Recupero io 
        $id = Auth::id();

        // Recupero user 
        $user = User::where('id', $id)->orderBy('created_at', 'desc')->get();
        
        // Recupero tutti i messaggi e li metto in ordine 
        $reviews = Review::orderBy('created_at' ,'desc')->get();

        // Array associativo 
        $data = [
            'user' => $user,
            'reviews' => $reviews
        ];

        // Reindirizzo la pagina con dati 
        return view('reviews.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    // PUBLIC FUCTION ELEMINA RECENSIONI 
    public function destroy($id)
    {
        // Trovo recensione tramite id 
        $review = Review::find($id);

        // Cancello 
        $review->delete();

        // Reindizzo la pagina con status 
        return redirect()->route('review.index')->with('status','Recensione Rimossa');
    }
}
