<?php

use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        
             DB::table('departamentos')->insert([
        
            'id'=>1, 'nombre'=>'Amazonas', 'created_at'=>NULL, 'updated_at'=>NULL,
                       
            ]);
            
            DB::table('departamentos')->insert([
                        
            'id'=>2, 'nombre'=>'Antioquia', 'created_at'=>NULL, 'updated_at'=>NULL,
               
            ]);
            
            DB::table('departamentos')->insert([

                'id'=>3, 'nombre'=>'Arauca', 'created_at'=>NULL, 'updated_at'=>NULL,
    
                ]);

            DB::table('departamentos')->insert([
                
                    'id'=>4, 'nombre'=>'Atlántico', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                  
                    ]);
                
            DB::table('departamentos')->insert([
                 
                'id'=>5, 'nombre'=>'Bolívar', 'created_at'=>NULL, 'updated_at'=>NULL,
                 ]);
                
            DB::table('departamentos')->insert([
                                                
                 'id'=>6, 'nombre'=>'Boyacá', 'created_at'=>NULL, 'updated_at'=>NULL,
                                             
                 ]);
                 
            DB::table('departamentos')->insert([
                                              
                 'id'=>7, 'nombre'=>'Caldas', 'created_at'=>NULL, 'updated_at'=>NULL,
                                      
                 ]);
                 
            DB::table('departamentos')->insert([
                                    
                 'id'=>8, 'nombre'=>'Caquetá', 'created_at'=>NULL, 'updated_at'=>NULL,
                                          
                 ]);
                 
            DB::table('departamentos')->insert([
                                           
                 'id'=>9, 'nombre'=>'Casanare', 'created_at'=>NULL, 'updated_at'=>NULL,
                                           
                  ]);
                  
            DB::table('departamentos')->insert([
            
                                                   
                 'id'=>10, 'nombre'=>'Cauca', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                  
                 ]);
                 
            DB::table('departamentos')->insert([
            
                   'id'=>11, 'nombre'=>'Cesar', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                      
                ]);
           
            DB::table('departamentos')->insert([
            
                    'id'=>12, 'nombre'=>'Chocó', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                         
                 ]);
                 
           DB::table('departamentos')->insert([
        
                    'id'=>13, 'nombre'=>'Córdoba', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                        
                 ]);
            
          DB::table('departamentos')->insert([
            
                    'id'=>14, 'nombre'=>'Cundinamarca', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                        
                 ]);
                 
        DB::table('departamentos')->insert([
            
                    'id'=>15, 'nombre'=>'Güainia', 'created_at'=>NULL, 'updated_at'=>NULL,
                                        
                 ]);
                 
        DB::table('departamentos')->insert([
            
                    'id'=>16, 'nombre'=>'Guaviare', 'created_at'=>NULL, 'updated_at'=>NULL,
                 ]);
                 
                 DB::table('departamentos')->insert([
            
                    'id'=>17, 'nombre'=>'Huila', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                        
                 ]);
                 
                 DB::table('departamentos')->insert([
            
                    'id'=>18, 'nombre'=>'La Guajira', 'created_at'=>NULL, 'updated_at'=>NULL,
                                       
                 ]);
                 
                 DB::table('departamentos')->insert([
            
                   'id'=>19, 'nombre'=>'Magdalena', 'created_at'=>NULL, 'updated_at'=>NULL,
                  
                 ]);
                 
                 DB::table('departamentos')->insert([
            
                    'id'=>20, 'nombre'=>'Meta', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                         
                 ]);
                 
                 DB::table('departamentos')->insert([
            
                    'id'=>21, 'nombre'=>'Nariño', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                         
                 ]);
                 
                 DB::table('departamentos')->insert([
            
                    'id'=>22, 'nombre'=>'Norte de Santander', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                        
                 ]);
                 
                 DB::table('departamentos')->insert([
            
                    'id'=>23, 'nombre'=>'Putumayo', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                         
                 ]);
                 
                 DB::table('departamentos')->insert([
            
                    'id'=>24, 'nombre'=>'Quindo', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                       
                 ]);
                 
                 DB::table('departamentos')->insert([
            
                    'id'=>25, 'nombre'=>'Risaralda', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                        
                 ]);
                 
                 DB::table('departamentos')->insert([
            
                    'id'=>26, 'nombre'=>'San Andrés y Providencia', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                 
                 ]);
                 
                 DB::table('departamentos')->insert([
            
                    'id'=>27, 'nombre'=>'Santander', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                         
                 ]);
                 
                 DB::table('departamentos')->insert([
            
                    'id'=>28, 'nombre'=>'Sucre', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                        
                 ]);
                 
                 DB::table('departamentos')->insert([
            
                    'id'=>29, 'nombre'=>'Tolima', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                      
                 ]);
                 
                 DB::table('departamentos')->insert([
            
                    'id'=>30, 'nombre'=>'Valle del Cauca', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                     
                 ]);
                 
                 DB::table('departamentos')->insert([
           
                    'id'=>31, 'nombre'=>'Vaupés', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                                       
                 ]);
                 
                 DB::table('departamentos')->insert([
            
                    'id'=>32, 'nombre'=>'Vichada', 'created_at'=>NULL, 'updated_at'=>NULL,
                                                         
                 ]);
             
             }
}