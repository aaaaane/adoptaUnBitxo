<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

protected $table = 'animals';
	protected $fillable = [
        'name', 'age','gender','sterilized','comment', 'size','type', 'adopcio_id', 'image', 'image2', 'image', 'image4', 'visible', 
    ]; 




}