<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Doctor;
use App\Review;

class ProfiliController extends Controller
{
    public function index(){
        $profili = Doctor::all();
        
        $data = [
            'profili' => $profili,
        ];

        return response()->json([
            'success' => true,
            'response' => $data
        ]);
    }
}
