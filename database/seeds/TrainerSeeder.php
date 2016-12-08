<?php

use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        DB::table('trainers')->delete();
  $trainers = array(
  ["id"=>1, "name"=>"Jennifer Lawrence", "email" => "j@j.com" , "hometown"=> "EL", "admin"=> 1, "created_at" => new DateTime, "updated_at" => new DateTime],
  ["id"=>2, "name"=>"Will Smith","email" => "w@w.com" , "hometown"=> "EL1", "admin"=> 1, "created_at"=> new DateTime, "updated_at" => new DateTime],
  ["id"=>3, "name"=> "Matt Damon","email" => "m@m.com" , "hometown"=> "EL2", "admin"=> 0, "created_at" => new DateTime, "update_at" => new DateTime]
   );
DB::table('trainers') -> insert($trainers);

    

    }
}
