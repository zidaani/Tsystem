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
         $array['transactions'] =  Transaction::all();
        return view('admin.transactions.index')->with($array);
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
         $validator = Validator::make($request->all(), [
            'daily_amount' => 'required|unique:branches|min:4|max:24',
            // 'name_of_agent' => 'required|unique:branches|min:4',
            'date' => 'required|date|before:tomorrow',
        ],);

        if ($validator->fails()) {
            return redirect(route('transactions.index'))
                        ->withErrors($validator)
                        ->withInput();
        }

       $data = $request->all();

       Transaction::create($data);

       return redirect(route('transaction.index'));
    }
    public function create(){
        return view('transaction.index');
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
        
       return view('admin.transaction.index')->with($array);
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
