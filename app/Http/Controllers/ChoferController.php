<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Chofer;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/***
* Chofer controller class
***/
class ChoferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all the tractors
		$chofers = Chofer::all();
		// Return the tractors to the index view
		return response()->json( $chofers );
    }//End of index function

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create chofer
    }//End of create function

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		//Create chofer
		$chofer = new Chofer;
		//fill the model
		$chofer->fill( $request->input() );
		//Save chofer model
		$chofer->save();
		// Return saved model
		return response()->json( $chofer );
    }//End of store function

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get object by id
		$chofer = Chofer::find( $id );
		//Return the object
		return response()->json( $chofer );
    }//End of show function

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get object by id
		$chofer = Chofer::find( $id );
		//Return the object
		return response()->json( $chofer );
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
		$chofer = Chofer::find( $id );
		//Fill the model
		$chofer->fill( $request->input() );
		//Update the model
		$chofer->update();
		//Return the object
		return response()->json( $chofer );
    }//End of update function

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the chofer
		$chofer = Chofer::find( $id );
		// Delete the model
		$chofer->forceDelete();
    }//End of destroy function
	
}//End of chofer controller class
