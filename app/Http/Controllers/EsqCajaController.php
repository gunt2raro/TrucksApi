<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\EsqCaja;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/***
* EsqCaja controller class
***/
class EsqCajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        //Get all the tractors
		$esq_cajas = EsqCaja::all( );
		// Return the tractors to the index view
		return response()->json( $esq_cajas );
    }//End of index function

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //init new object
		$esq_caja = new EsqCaja;
		//return serialized object
		return response()->json( $esq_caja );
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
        $esq_caja = new EsqCaja( Request::all() );
		// Save tractor
		$esq_caja->save();
		// Return tractor
		return response()->json( $esq_caja );
    }//End of store function

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //init new object
		$esq_caja = EsqCaja::find( $id );
		//return serialized object
		return response()->json( $esq_caja );
    }//End of show function

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //init new object
		$esq_caja = EsqCaja::find( $id );
		//return serialized object
		return response()->json( $esq_caja );
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
		$esq_caja = EsqCaja::find( $id );
		//Fill the model
		$esq_caja->fill( $request->input() );
		//Update the model
		$esq_caja->update();
		//Return the object
		return response()->json( $esq_caja );
    }//End of udpate function

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the tractor
		$esq_caja = EsqCaja::find( $id );
		// Delete the model
		$esq_caja->forceDelete();
    }//End of destroy function 
}//End of esq_caja controller class
