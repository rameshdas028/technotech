<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profileform;
use Auth;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $profile = Auth::user()->profileforms;
      $profile_length=count($profile);
        $Profileforms =  Profileform ::whereUserId(null)->get();
        return view('home',['Profileforms' =>$Profileforms,'profile_length'=>$profile_length]);
    }
    public function profile_store(Request $request)
    {
        $inputs = $request->all();
        $form_names = $inputs['form_name'];
        $form_requireds = $inputs['form_required'];
        foreach($form_names as $form_name){
            $profileform = new Profileform;
            $profileform->form_name =$form_name;
            $profileform->user_id =Auth::user()->id;
            $profileform->save();
                }
        return back()->with('success',"You are Successfully created profile ");
    }
}
