<?php

use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('pokemons')->delete();
        $pokemons = array(
        ["id"=>1, "trainer_id"=>1, "name" => "The Hunger Game", "created_at" => new DateTime, "updated_at" => new DateTime],
        ["id"=>2, "trainer_id"=>1, "name" => "X-Men", "created_at" => new DateTime, "updated_at" => new DateTime],
        ["id"=>3, "trainer_id"=>2, "name" => "Suicide Squad", "created_at" => new DateTime , "updated_at"=> new DateTime],
        ["id"=>4, "trainer_id"=>3, "name" => "Good Will Hunting", "created_at" => new DateTime , "updated_at" => new DateTime],
        ["id"=>5, "trainer_id"=>3, "name" => "Jason Bourne", "created_at" => new DateTime , "updated_at"=> new DateTime]

);
DB::table('pokemons')-> insert($pokemons);
    }
}
