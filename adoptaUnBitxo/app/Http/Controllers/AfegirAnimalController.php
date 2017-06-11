<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Animal;

class AfegirAnimalController extends Controller
{
    public function index(Request $request)
    {

        //Crido a la vista
        return view('back.afegirAnimal');
    }

     public function __construct()
    {
        $this->middleware('auth');
    }

    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:350',
            'age' => 'required|max:2',
            'gender' => 'required',
            'sterilized' => 'required|max:2',
            'size' => 'required',
            'type' =>'required',
            'comment' => 'required|max:350',
            'image' => 'required',
            'image2',
            'image3',
            'image4',
            
        ]);
    }
        public function create(){
        return \View::make('back/afegirAnimal');
    }
        public function store(Request $request)
    {
        $animal = new Animal;
        $animal->name = $request->name;
        $animal->age = $request->age;
        $animal->gender = $request->gender;
        $animal->sterilized = $request->sterilized;
        $animal->size = $request->size;
        $animal->type = $request->type;
        $animal->comment = $request->comment;
        $animal->image = $request->image;
        $animal->image2 = $request->image2;
        $animal->image3 = $request->image3;
        $animal->image4 = $request->image4;
        $animal->save();
        return redirect('adopta');
    }
}
