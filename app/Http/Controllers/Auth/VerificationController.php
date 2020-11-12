<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Nexmo\Client\Credentials\Basic;
use Nexmo\Client;
use Nexmo\Verify\Verification;
use App\User;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{


    public function checkVerification(Request $request, $id) // Check validaton method calibrace open
    {
        $user = User::find($id);

        $basic  = new Basic('e1ee698d', '3vsIsgixcRp5bmRM');
        $client = new Client($basic);

        $request_id = (string) $request->user_verification_id;
        $verification = new Verification($request_id);
        $result = $client->verify()->check($verification, (string) $request->code);

        $status = $result->getResponseData();


        if ($status[status] == 0 ) 
        {
            $user->verify = true;
            $user->save();
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
            // Authentication passed...
                return response()->json( redirect()->intended() );
            }

        }


    } // Check validaton method calibrace close

    public function verify()
    {
        return view('auth.verify_sms');
    }

    public function resendCode(Request $request)
    {

        $credentials = new Basic('e1ee698d', '3vsIsgixcRp5bmRM');
        $user_credentials = new Client($credentials);

        $verification = $user_credentials->verify()->start([ 
            'number' => (string) $request->user_phone,
            'brand'  => 'Bellewisefoods',
            'code_length'  => '4']); 
    }



}
