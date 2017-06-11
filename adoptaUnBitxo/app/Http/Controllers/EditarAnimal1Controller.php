<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Animal;

class EditarAnimal1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
        {
        
        $id = $request->id;

        $animal = Animal::find($id);

        if ($request->age != null || $request->age != '' || !(is_numeric($request->age))){
            $animal->age = $request->age;
        }
        

        if ($request->sterilized != null || $request->sterilized != '' || $request->sterilized != 'Si' || $request->sterilized != 'No') {
            $animal->sterilized = $request->sterilized;
        }

        if ($request->comment != null || $request->comment != ''){
           $animal->comment = $request->comment; 
        }
        
        if ($request->image != null || $request->image != ''){
            $animal->image = $request->image;
        }

        if ($request->image2 != null || $request->image2 != ''){
            $animal->image2 = $request->image2;
        }

        if ($request->image3 != null || $request->image3 != ''){
            $animal->image3 = $request->image3;
        }

        if ($request->image4 != null || $request->image4 != ''){
            $animal->image4 = $request->image4;
        }


        $animal->save();
        return redirect('detall/'.$id);
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
