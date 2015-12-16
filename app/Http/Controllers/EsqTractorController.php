<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\EsqTractor;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/***
* Esq Tractor Controller class
***/
class EsqTractorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all the esquematics
		$esq_tractor = EsqTractor::all();
		//return all the esquematics
		return response()->json( $esq_tractor );
    }//End of index function

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create new empty object
		$esq_tractor = new EsqTractor;
		//Return the empty object
		return response()->json( $esq_tractor );
    }//End of create function

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		// Init esq_tractor
        $esq_tractor = new EsqTractor( Request::all() );
		// Save esq_tractor
		$esq_tractor->save();
		// Return esq_tractor
		return response()->json( $esq_tractor );
    }//End of store function

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get by id
		$esq_tractor = EsqTractor::find( $id );
		//Return serialized object
		return response()->json( $esq_tractor );
    }//End of show function

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Get by id
		$esq_tractor = EsqTractor::find( $id );
		//Return serialized object
		return response()->json( $esq_tractor );
    }//End of edit function

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //get object by id
		$esq_tractor = EsqTractor::find( $id );
		//Fill the model
		$esq_tractor->fill( $request->input() );
		//Update the model
		$esq_tractor->update();
		//Return the object
		return response()->json( $esq_tractor );
    }//End of update function

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Get by id
		$esq_tractor = EsqTractor::find( $id );
		//delete model
		$esq_tractor->forceDelete();
    }//End of destroy function
	
}//End of EsqTractorController function
