<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DanoEsqCaja;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DanoEsqCajaController extends Controller
{
    /**
     * Display a listing of the daños esquematico de caja por id de esquematico.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        //Get all the dano_esq_caja
		$dano_esq_caja = DanoEsqCaja::all();
		// Return the dano_esq_caja to the index view
		return response()->json( $dano_esq_caja );
    }//End of index function

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create object
		$dano_esq_caja = new DanoEsqCaja;
		//Return the object serialized
		return response()->json( $dano_esq_caja );
    }//End of create function

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		// Init dano_esq_caja
        $dano_esq_caja = new DanoEsqCaja( Request::all() );
		// Save dano_esq_caja
		$dano_esq_caja->save();
		// Return dano_esq_caja
		return response()->json( $dano_esq_caja );
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
		$dano_esq_caja = DanoEsqCaja::find( $id );
		//Return serialized object
		return response()->json( $dano_esq_caja );
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
		$dano_esq_caja = DanoEsqCaja::find( $id );
		//Return serialized object
		return response()->json( $dano_esq_caja );
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
		$dano_esq_caja = DanoEsqCaja::find( $id );
		//Fill the model
		$dano_esq_caja->fill( $request->input() );
		//Update the model
		$dano_esq_caja->update();
		//Return the object
		return response()->json( $dano_esq_caja );
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
		$dano_esq_caja = DanoEsqCaja::find( $id );
		//delete model
		$dano_esq_caja->forceDelete();
    }//End of destroy function
}//End of DanoEsqCaja Controller class
