<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profileform;
use App\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProfileformExport;

class ProfileformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profileforms =  Profileform ::whereUserId(null)->get();
        return view('admin.profile.all',['profileforms' =>$profileforms]);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input =$request->all();
        $input['form_required'] =$request->form_required==1?1:0;
        Profileform :: create($input);
        return back()->with('success','you are succesfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profileform $profile)
    {
         return view('admin.profile.edit',['profileform'=>$profile]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profileform $profile)
    {
        $input =$request->all();
        $input['form_required'] =$request->form_required==1?1:0;  
        $profile->update($input);
        return redirect()->route('admin.profile.index')->with('success','You are succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profileform $profile)
    {
         $profile->delete();
         return back();
    }
    public function all_profile_show(){
     $data=[];
     $data= [
         'profileFields' => Profileform ::whereUserId(null)->get(),
         'profileAll'     =>User ::with('profileforms')->get()
     ];
       return view('admin.profile.allprofile' ,['data' =>$data]);
    }

    public function export($type)
    {
        return Excel::download(new ProfileformExport, 'posts.' . $type);    }
}
