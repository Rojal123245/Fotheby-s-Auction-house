<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\client;
use Illuminate\Support\Facades\Hash;

class clientLoginController extends Controller
{

    public function index(Request $request)
    {
       $model = client::where('email', $request->email)->first();
       if($model->approved == 1){
       if (Hash::check($request->password, $model->password, [])) {  
        session_start();
         $useremail = $request->email;
         $_SESSION['useremail'] = $request->email;
         $_SESSION['clientstatus'] = $model->clientstatus;
          return redirect()->route( 'requestItems' );
       }
     }
        return back()->withMessage(config('activityMessage.unAuthorized'));
    }

    
}
