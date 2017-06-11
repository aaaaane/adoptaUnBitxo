<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apadrinament extends Model
{

	protected $table = 'apadrinaments';

	protected $fillable = [
        'user_id', 'animal_id', 'amount',
    ]; 
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function animal(){
    	return $this->belongsTo('App\Animal');
    }
}
