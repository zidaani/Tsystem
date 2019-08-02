<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(){
         $array['transaction'] =  Transaction::all();
        return view('users.trans.index')->with($array);
       }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('trans.index');
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
            'daily_amount' => 'required',
          
            'date' => 'required|date|before:tomorrow',
        ],);
          return $request;

        if ($validator->fails()) {
            return redirect(route('trans.index'))
                        ->withErrors($validator)
                        ->withInput();
        }

       $data = $request->all();

       Transaction::create($data);

       return redirect(route('trans.index'));
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show($trans_id)
    {
        $array['transaction'] = Transaction::findOrFail($id);
        
       return view('users.trans.index')->with($array);
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
