<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rol;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/***
* Rol Controller Class
***/
class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all the rols
		$rols = Rol::all();
		//Return the serialize array
		return response()->json( $rols );
    }//Emd of index function

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create empty object
		$rol = new Rol;
		//Return the new object
		return response()->json( $rol );
    }//End of create function

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		// Init rol
        $rol = new Rol( Request::all() );
		// Save rol
		$rol->save();
		// Return rol
		return response()->json( $rol );
    }//End of store function

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get rol by id
		$rol = Rol::find( $id );
		// Return rol
		return response()->json( $rol );
    }//End of show function

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Get rol by id
		$rol = Rol::find( $id );
		// Return rol
		return response()->json( $rol );
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
		$rol = Rol::find( $id );
		//Fill the model
		$rol->fill( $request->input() );
		//Update the model
		$rol->update();
		//Return the object
		return response()->json( $rol );
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
		$rol = Rol::find( $id );
		//Destroy model
		$rol->forceDelete();
    }//End of destroy function
}//End of Rol controller class
