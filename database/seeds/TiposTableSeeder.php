<?php

use Illuminate\Database\Seeder;

class TiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipos')->insert([
            
            'id'=>1, 'nombre'=>'Diplomado', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                         
         ]);

         DB::table('tipos')->insert([
            
            'id'=>2, 'nombre'=>'Seminario', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                         
         ]);

    }
}
