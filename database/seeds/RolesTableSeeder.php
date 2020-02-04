<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            
            'id'=>1, 'nombre'=>'admin', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                         
         ]);

         DB::table('roles')->insert([
            
            'id'=>2, 'nombre'=>'Estudiante', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                         
         ]);

    }
}
