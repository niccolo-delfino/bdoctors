<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Doctor;
use App\User;
use App\Promo;
use Carbon\Carbon;

class PaymentController extends Controller
{
    
    // PUBLIC FUCTION PER ACCEDERE AL PAGAMENTO PROMO 
    public function request(Doctor $doctor)
    {
        // Recupero tutte le promo 
        $promo = Promo::all();

        // Se id utente e uguale al User_id del medico selezionato 
        if(Auth::id() == $doctor->user_id) {

        //gateway Braintree
        $gateway = new \Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);
        
        // Array associtiva per trasferire dati su page 
        $data = [
            'token' => $gateway->clientToken()->generate(),
            'doctor' => $doctor,
            'promo' => $promo
        ];

        // Reindizzionamento pag con dati 
        return view('user.payment.request', $data);
    }
        // Se id user non corrisponde al user_id medico 
        return redirect()->route('home');
    }

    // PUBLIC FUCTION PAGAMENTO PROMO
    public function payment(Request $request, Doctor $doctor)
    {
        
        //gateway
        $gateway = new \Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);
        // Recupero tutti i dati dal form 
        $data = $request->all();
        
        // Recupero promo in base hai dati selezionati nel form
        $promo = Promo::where('name',($data['promo']))->first();
        
        //transaction
        $result = $gateway->transaction()->sale([
            'amount' => $promo->price,
            'paymentMethodNonce' => $request->payment_method_nonce,
            'options' => [
                'submitForSettlement' => True
            ],
            'customer'=>[
                'lastName' => $doctor->user_name
            ]
        ]);

        // Controllo risultato 
        $status = false;

        // Se risulato è true modifico le tabelle del doctor 
        if($result) {
            $status = true;
            $doctor->promos = $data['promo'];
            $doctor->end = Carbon::now()->addDay($promo->duration / 24);
            $doctor->update();
        }

        // Reindizzionamento pag con status 
        return redirect()->route('payment.check')->with('status', $status);
    }

    // PUBLIC FUCTION PER CHECK PAGAMENTO 
    public function check()
    {
        return view('user.payment.check');
    }
}
