<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DanoEsqTractor;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/***
* Dano esq tractor controller class
***/
class DanoEsqTractorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        //Get all the tractors
		$dano_esq_tactors = DanoEsqTractor::all();
		// Return the tractors to the index view
		return response()->json( $dano_esq_tractors );
    }//End of index function

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create new empty object
		$dano_esq_tractor = new DanoEsqTractor;
		//Return the empty object
		return response()->json( $dano_esq_tractor );
    }//End of create function

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		// Init dano_esq_tractor
        $dano_esq_tractor = new DanoEsqTractor( Request::all() );
		// Save dano_esq_tractor
		$dano_esq_tractor->save();
		// Return dano_esq_tractor
		return response()->json( $dano_esq_tractor );
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
		$dano_esq_tractor = DanoEsqTractor::find( $id );
		//Return serialized object
		return response()->json( $dano_esq_tractor );
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
		$dano_esq_tractor = DanoEsqTractor::find( $id );
		//Return serialized object
		return response()->json( $dano_esq_tractor );
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
		$dano_esq_tractor = DanoEsqTractor::find( $id );
		//Fill the model
		$dano_esq_tractor->fill( $request->input() );
		//Update the model
		$dano_esq_tractor->update();
		//Return the object
		return response()->json( $dano_esq_tractor );
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
		$dano_esq_tractor = DanoEsqTractor::find( $id );
		//delete model
		$dano_esq_tractor->forceDelete();
    }//End of destroy function
	
}//End of DanoEsqTractor controller class
