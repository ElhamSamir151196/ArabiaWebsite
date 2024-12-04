<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Users = User::orderBy('id','desc')->get();

        return view('Dashboard/User/Show_All' , compact('Users'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fields  = $request->get('flexRadioDefault');
       
  if($fields == 'flexRadioDefault1'){
  $Category_User="Company Owner";
  }
  else if($fields =='flexRadioDefault2'){
    $Category_User="Admin";
  }
  else{
    $Category_User="Client";
  }

        $request->validate([
            'email' => 'required|email|unique:users',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'password'         => 'required|min:6',
        'password_confirmation' => 'required||min:6|same:password'
        ]);
       
        $new_user= new User;
        $new_user->name=$request->first_name;
        $new_user->email=$request->email;
        $new_user->password=$request->password;
        $new_user->Second_name=$request->last_name;
        $new_user->Address=$request->address;
        $new_user->Category=$Category_User;
        $new_user->Phone=$request->phone;
        
        $new_user->save();

        
        session()->flash('success' ,'User Created Successfully');
        return redirect()->back();
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
