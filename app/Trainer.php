<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
      protected $fillable = [
        'name', 'email',
    ];
 

	public function user(){

	 return $this->belongsTo('App\User', 'foreign_key', 'local_key');
} 
        public function pokemons(){

           return $this->hasMany('App\Pokemon');
}
}
?>


