<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Branch;
use Validator;

class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(){
         $array['branches'] = Branch::all();
        return view('admin.branches.index')->with($array);
       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $array['branches'] = Branch::all();
        return view('admin.branches.createbranch')->with($array);
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
            'branch_name' => 'required|unique',
            'branch_capital' => 'required|numeric|min:0.01',
            'name_of_agent' => 'required|unique:branches|min:4',
            'date_established' => 'required|date|before:tomorrow',
        ], ['branch_capital.min' => 'Branch Capital must be a positive value.']);

        if ($validator->fails()) {
            return redirect(route('branches.create'))
                        ->withErrors($validator)
                        ->withInput();
        }

       $data = $request->all();

       Branch::create($data);

       return redirect(route('branches.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$array['branch'] = Branch::findOrFail($id);
    	// return $branch->branch_id;
       return view('admin.branches.detail')->with($array);
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
