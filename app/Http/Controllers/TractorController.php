<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tractor;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
* Chofer controller class
***/
class TractorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all the tractors
		$tractors = Tractor::all();
		// Return the tractors to the index view
		return response()->json( $tractors );
    }//End of index function

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create the object
		$tractor = new Tractor;
		//Return the empty object
		return response()->json( $tractor );
    }//End of create function

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		// Init tractor
        $tractor = new Tractor( Request::all() );
		// Save tractor
		$tractor->save();
		// Return tractor
		return response()->json( $tractor );
    }//End of store function

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get tractor by id
		$tractor = Tractor::find( $id );
		// Return tractor
		return response()->json( $tractor );
    }//End of show(get by id) function

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Get tractor by id
		$tractor = Tractor::find( $id );
		// Return tractor
		return response()->json( $tractor );
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
		$tractor = Tractor::find( $id );
		//Fill the model
		$tractor->fill( $request->input() );
		//Update the model
		$tractor->update();
		//Return the object
		return response()->json( $tractor );
    }//End of update function

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the tractor
		$tractor = Tractor::find( $id );
		// Delete the model
		$tractor->forceDelete();
    }//End of destroy function
	
	/**
	* Get all the tractors by user id
	***/
	public function getByUserId( $id ){ 
		//Get by user id
		$tractor = Tractor::where( 'user_id', '==', $id );
		//Return serialize object
		return response()->json( $tractor );
	}//End of get_by_user_id function
	
}//End of tractor controller class