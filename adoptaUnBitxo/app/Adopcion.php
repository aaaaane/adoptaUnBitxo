<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adopcion extends Model
{

	protected $table = 'adopcions';

	protected $fillable = [
        'user_id', 'animal_id'
    ]; 
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function animal(){
    	return $this->belongsTo('App\Animal');
    }

}
