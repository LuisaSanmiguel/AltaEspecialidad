<?php

use Illuminate\Database\Seeder;

class CarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('carreras')->insert([
            
            'id'=>1, 'nombre'=>'Escuela de formación en Gestión Pública', 'activo'=>1, 'costo'=>'GRATIS', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                
         ]);

         DB::table('carreras')->insert([
            
            'id'=>2, 'nombre'=>'Escuela de formación Política', 'activo'=>0, 'costo'=>0 , 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                
         ]);
         DB::table('carreras')->insert([
            
            'id'=>3, 'nombre'=>'Escuela de formación Ciencias Contable', 'activo'=>0, 'costo'=>0, 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                
         ]);
         DB::table('carreras')->insert([
            
            'id'=>4, 'nombre'=>'Escuela de formación Ciencias Jurídica', 'activo'=>0, 'costo'=>0, 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                
         ]);
         DB::table('carreras')->insert([
            
            'id'=>5, 'nombre'=>'Escuela de formación Desarrollo Software', 'activo'=>0, 'costo'=>0, 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                
         ]);
         DB::table('carreras')->insert([
            
            'id'=>6, 'nombre'=>'Escuela de Formación Mercadeo y Publicidad', 'activo'=>0, 'costo'=>0, 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                
         ]);
         DB::table('carreras')->insert([
            
            'id'=>7, 'nombre'=>'Escuela de Formación en Emprendimiento', 'activo'=>0, 'costo'=>0, 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                
         ]);


    }
}
