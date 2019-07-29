<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agent;
use Validator;

class AgentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $array['agents'] = Agent::all();
        return view('admin.agents.index')->with($array);
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
                    'first_name' => 'required|unique:agents|min:4|max:24',
                    'last_name' => 'required|unique:agents|min:4',
                    'education' => 'required|unique:agents|min:4',
                    'date_of_birth' => 'required|date',
                    'sex' => 'required',
                    'branch' => 'required',
                ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

       $data = $request->all();

       Agent::create($data);

       return redirect(route('agents.index'));
    }

    public function create(){
         
        return view('admin.agents.create');
       }


    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $array['agent'] = Agent::findOrFail($id);
        
       return view('admin.agents.view')->with($array);
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
