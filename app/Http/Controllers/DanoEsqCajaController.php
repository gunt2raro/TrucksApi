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
    public function get_by_esq_caja($id)
    {
        //Get all the tractors
		$dano_esq_cajas = DanoEsqCaja::where( 'esq_caja_id', '==', $id );
		// Return the tractors to the index view
		return response()->json( $dano_esq_cajas );
    }//End of index function

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
