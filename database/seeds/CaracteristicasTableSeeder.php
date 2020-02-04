<?php

use Illuminate\Database\Seeder;

class CaracteristicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


               
        DB::table('caracteristicas')->insert([
            
            'id'=>1, 'nombre'=>'Objetivos Específicos', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                
         ]);

         DB::table('caracteristicas')->insert([
            
            'id'=>2, 'nombre'=>'Competencias Genéricas', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                
         ]);
         DB::table('caracteristicas')->insert([
            
            'id'=>3, 'nombre'=>'Competencias Específicas', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                
         ]);
         DB::table('caracteristicas')->insert([
            
            'id'=>4, 'nombre'=>'Ejes Temáticos/ Contenidos', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                
         ]);
         DB::table('caracteristicas')->insert([
            
            'id'=>5, 'nombre'=>'Desarrollo', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                
         ]);
         DB::table('caracteristicas')->insert([
            
            'id'=>6, 'nombre'=>'Materiales de apoyo didáctico', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                
         ]);
         DB::table('caracteristicas')->insert([
            
            'id'=>7, 'nombre'=>'Bibliografía', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                
         ]);

 
    }
}
