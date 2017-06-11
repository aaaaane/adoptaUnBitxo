<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Apadrinament;

class ApadrinamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

     protected function validator(array $data)
    {
        return Validator::make($data, [
            'animal_id' => 'required',
            'user_id' => 'required',
            'amount' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Apadrinament::create([
            'animal_id' => $data['animal_id'],
            'user_id' => $data['user_id'],
            'amount' => $data['amount'],
        ]);
    }


  public function store(Request $request)
    {
        
        $apadrinament = new Apadrinament;
        $apadrinament->user_id = $request->user_id;
        $apadrinament->animal_id = $request->animal_id;
        $apadrinament->amount = $request->amount;
        $apadrinament->save();
        return redirect('elsMeusApadrinaments');
        
    }

    public function index()
    {
         $animals = Animal::all();
    return view('front.apadrinar', compact('animals'));
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
