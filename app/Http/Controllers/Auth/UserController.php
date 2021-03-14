<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
//use Nexmo\Client\Credentials\Basic;
//use Nexmo\Client;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(5);
        return response()->json($users);
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $check_verify_status = Auth::user()->verify == 1 ? 'verify' : 'non verify' ;
            $login_credentials = ['verify' => $check_verify_status, 'email' => $request->email, 'password' => $request->password, 'phone' => Auth::user()->phone];
            $logout_check =  $check_verify_status == 'non verify' ? Auth::logout() : '' ;
            return response()->json($login_credentials);
        }else {
            return response()->json('Credential do not match our records', 400);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:30',
            'address' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
            'phone' => ['required', 'unique:users']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

/*        $credentials = new Basic('e1ee698d', '3vsIsgixcRp5bmRM');
        $user_credentials = new Client($credentials);

        $verification = $user_credentials->verify()->start([ 
          'number' => $request->phone,
          'brand'  => 'Bellewisefoods',
          'code_length'  => '4']); */

          $short_code = mt_rand(100000, 999999);

          $user = new User;
          $user->name = $request->name;
          $user->address = $request->address;
          $user->email = $request->email;
          $user->password = Hash::make($request->password);
          $user->phone = $request->phone;
          $user->verification_code = $short_code;

        //8157871972
          $user->save();

          $verification_credentials = ['user_id' => $user->id, 'phone' => $request->phone];

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

          return response()->json($verification_credentials);

      }



      public function search(Request $request)
      {
        $search_query = $request->search_query;
        $data = User::where('email','LIKE',"%$search_query%")
        ->take(5)
        ->get();
        return response()->json($data);
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

    public function allUser()
    {
        $users = User::all();
        return response()->json($users);
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
