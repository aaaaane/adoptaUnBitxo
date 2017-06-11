<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Animal;

class EditarAnimalController extends Controller
{
    public function index(Request $request)
    {
        $animals = Animal::all();
        //Crido a la vista
        return view('back.editarAnimal', compact('animals'));
    }

        

    public function detalle($id){
    $animals = Animal::where('id', $id)
    -> get();
    return \View::make('back.editarAnimal1', compact('animals'));
    }

     public function __construct()
    {
        $this->middleware('auth');
    }


     public function store(Request $request)
        {
        
        $id = $request->id;

        $animal = Animal::find($id);

        $animal->visible = $request->visible;
        $animal->save();
        return redirect('editarAnimal');
    }

}
