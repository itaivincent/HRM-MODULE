<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assets;
use App\Models\Employees;
use App\Models\Departments;
use App\User;
use App\Models\EmpAssets;
use Carbon\Carbon;

class assetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assets = Assets::all();

        return view('assets.index', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $asset = Assets::create([

            'name' =>  $request->serialNum,
            'assetCode' =>  $request->code,
            'type' =>  $request->type,
            'dateAdded' =>  $request->date,
            'description' =>  $request->desc,
            'brand' => $request->brand,
            'condition' => $request->condition,
            'status' => 1,
        ]);

        if($asset){

            dd("success!! done");         
        }
        dd("failed!!");
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asset = Assets::where('id',$id)->first();

        return view('assets.show', compact('asset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asset = Assets::where('id', $id)->first();

        return view('assets.edit', compact('asset'));
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
        $updateAsset = Assets::where('id', $id)->update([
        
            'name' =>  $request->name,
            'type' =>  $request->type,
            'brand' =>  $request->brand,
            'assetCode' =>  $request->assetCode,
            'condition' =>  $request->condition,
            'description' =>  $request->description,

        ]);

        if($updateAsset){
            dd('success!!');
        }
        else{
            dd('error');
        }
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


    public function assignments(){

        $employees = Employees::all();
        $assets = Assets::all();

        return view('assets.assignments', compact('employees','assets'));
    }


    public function assetAssignment(Request $request){

       
        $getAsset = Assets::where('id', $request->asset )->first();
       
        $assetassignment = EmpAssets::create([

            'employee_id' => $request->employee,       
            'asset_id' => $request->asset, 
            'date' => Carbon::now(),
            'condition' => $getAsset->condition,

        ]);

        if($assetassignment){

            dd("success!! done");         
        }
        dd("failed!!");
     
    }


    public function manageAssignments(){

       dd("dumping data.....");
        return view('assets.manageAssignments');
    }
}
