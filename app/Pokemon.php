<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
     protected $table = 'pokemons';

        public function trainer(){
	//protected $table = 'pokemons';
           return $this->belongsTo('App\Trainer');
}
}
?>



