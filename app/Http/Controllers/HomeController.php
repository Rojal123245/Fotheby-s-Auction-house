<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\client;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\model\Items;
use App\Http\Requests\checkRegistration;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('about','userLogin','userRegister','saveRegisterData','logout','adminlogout','gallery','welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('items');
    }
    public function about()
    {

        return view('about');
    }
    public function gallery()
    {

     $img = Items::orderBy('id', 'desc')->take(5)->get();

     return view('gallery',compact(['img']));
 }
 public function welcome(){
   return view('welcome');
 }
 public function userLogin(){

    return view('userLogin');
}
public function userRegister(){

    return view('register');
}
public function saveRegisterData(checkRegistration $request){

 $mySave = client::create([
   'title' => $request->title,
   'firstname' => $request->firstname,
   'surname' => $request->surname,
   'address' => $request->address,
   'contactno' => $request->contactno,
   'email' => $request->email,
   'password' => Hash::make($request['password']),
   'clientstatus' => $request->clientstatus ,
   'bankacno' => $request->bankacno ,
   'sortcode' => $request->sortcode ,
   'approved' => 0
   ]);

 if ($mySave) {
    return back()->withMessage(config('activityMessage.saveMessage'));
}else{
    return back()->withMessage(config('activityMessage.unSaveMessage'));
}
}
public function logout(){
    session_start();
    session_destroy();
    return redirect('/');
}
public function adminlogout(){
    Auth::logout();
    return redirect('/login');
}

}
