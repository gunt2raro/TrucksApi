<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Caja;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/***
* Caja controller class
****/
class CajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all the cajas
		$cajas = Caja::all();
		// Return the tractors to the index view
		return response()->json( cajas );
    }//End of index function

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }//End of create functon

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		//Create chofer
		$caja = new Caja;
		//fill the model
		$caja->fill( $request->input() );
		//Save chofer model
		$caja->save();
		// Return saved model
		return response()->json( $caja );
    }//End of store function

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get object by id
		$caja = Caja::find( $id );
		//Return object
		return response()->json( $caja );
    }//End of show function

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Get object by id
		$caja = Caja::find( $id );
		//Return object
		return response()->json( $caja );
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
		$caja = Caja::find( $id );
		//Fill the model
		$caja->fill( $request->input() );
		//Update the model
		$caja->update();
		//Return the object
		return response()->json( $caja );
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
		$caja = Caja::find( $id );
		// Delete the model
		$caja->forceDelete();
    }//End of destroy function
	
	/***
	* getBy tractor id
	* gets all the cajas of the tractor
	****/
	public function getByTractorId( $id ){
		//Get the objects
		$cajas = Caja::where( 'tractor_id', '==', $id );
		//Return the objects
		return response()->json( $cajas );
	}//End of getByTractorId function
	
}//End of Caja controller class
