<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Client\Credentials\Basic;
use Nexmo\Client;
use Nexmo\Verify\Verification;
use Session;
use App\User;

class VerifyController extends Controller
{

    public function verify()
    {	

        return view('verify');
    }

    public function checkVerification(Request $request) {

        $nexmo_credentials = new Basic('e1ee698d', '3vsIsgixcRp5bmRM');
        $user_credentials = new Client($nexmo_credentials);

        $verification = new Verification($request->user_verification_id);
        $result = $user_credentials->verify()->check($verification, $request->code);


/*        $auth_credentials = $request->only('user_email', 'user_password');
        if (Auth::attempt($auth_credentials)) {
            // Authentication passed...
            return redirect()->intended();
        }*/

    }

    public function resendCode()
    {   

        $credentials = new Basic('e1ee698d', '3vsIsgixcRp5bmRM');
        $user_credentials = new Client($credentials);

        $verification = $user_credentials->verify()->start([ 
          'number' => $request->user_phone,
          'brand'  => 'Bellewisefoods',
          'code_length'  => '4']); 
        
    }




}
