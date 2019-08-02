<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $array['users'] = User::all();
        return view('admin.users.index')->with($array);
       }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
                  [
                        'branch_id'=>'required',
                        'first_name' => 'required|unique:agents|min:4|max:24',
                        'last_name' => 'required|unique:agents|min:4',
                        'other_name' => 'required|unique:agents|min:4', 
                        'education' => 'required|unique:agents|min:4',
                        'date_of_birth' => 'required|date',
                        'sex' => 'required',
                        'education' => 'required',
                        'home_town' => 'required',
                        'residential_address' => 'required',
                        'email' => 'required',
                        'type_id' => 'required',
                        'password' => 'required',

                ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

       $data = $request->all();

       User::create($data);

       return redirect(route('users.index'));
    }

    public function create(){
         
        return view('admin.users.create');
       }


    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $array['users'] = Users::findOrFail($id);
        
       return view('admin.users.view')->with($array);
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
