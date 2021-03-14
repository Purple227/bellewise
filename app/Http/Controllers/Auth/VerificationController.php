<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Nexmo\Client\Credentials\Basic;
//use Nexmo\Client;
//use Nexmo\Verify\Verification;
use App\User;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{


    public function checkVerification(Request $request, $id) // Check validaton method calibrace open
    {
        $user = User::find($id);

/*        $basic  = new Basic('e1ee698d', '3vsIsgixcRp5bmRM');
        $client = new Client($basic);

        $request_id = (string) $request->user_verification_id;
        $verification = new Verification($request_id);
        $result = $client->verify()->check($verification, (string) $request->code);

        $status = $result->getResponseData();
*/

        if ($request->code == $user->verification_code ) 
        {
            $user->verify = true;
            $user->save();
            return response()->json('succesfull', 200);
        } else {
            return response()->json('Failed', 400);
        }


    } // Check validaton method calibrace close

    public function verify()
    {
        return view('auth.verify_sms');
    }

    public function resendCode(Request $request, $id)
    {

/*        $credentials = new Basic('e1ee698d', '3vsIsgixcRp5bmRM');
        $user_credentials = new Client($credentials);

        $verification = $user_credentials->verify()->start([ 
            'number' => (string) $request->user_phone,
            'brand'  => 'Bellewisefoods',
            'code_length'  => '4']); 

            $request_id = $verification->getRequestId();*/

            $user = User::find($id);
            $short_code = mt_rand(100000, 999999);
            $user->verification_code = $short_code;
            $user->save();

            $convert_phone = json_encode($request->phone);
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://konnect.dotgo.com/api/v1/Accounts/mvg4WmICsRk1bPNvo14iaA==/Messages",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "{\r\"id\":\"your_unique_id_for_request\",\r\"from\":\"\",\r\"to\":[$convert_phone],\r\"sender_mask\":\"KOTP\",\r\"body\":\" Hi, $request->name your verification code is $short_code \"\r}\r",
                CURLOPT_HTTPHEADER => array(
                    "Authorization: r9iMM1tw30tfbdbBRelzcHcq3TY1pcH051Htuc1sfQ0=",
                    "Content-Type: application/json"
                )
            ));

            $response = curl_exec($curl);
            $err      = curl_error($curl);

            curl_close($curl);
            

            return response()->json('succesfull', 200);

        }

    }
