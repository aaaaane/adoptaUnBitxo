<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Adopcion;

class GestioAdopcionsController extends Controller
{
    public function index(Request $request)
    {
        $adopcions = Adopcion::all();
      
        return view('back.gestioAdopcions', compact('adopcions'));
    }

      public function destroy($id, $id_animal) {
      \DB::delete('delete from adopcions where id = ?',[$id]) ;
      \DB::update('update animals set adopcio_id = ?  where id = ?', ['',$id_animal]);

      return redirect('/gestioAdopcions');
   }
}
