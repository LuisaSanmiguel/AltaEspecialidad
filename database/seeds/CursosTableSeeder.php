<?php

use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('cursos')->insert([
            'id'=>1,
            'curso'=>'Nuevas estrategias de administración pública con enfoque en recurso humano',
            'duracion'=>'Ochenta horas (80) Cincuenta horas virtuales y treinta horas presenciales.',
            'fecha_ini'=>'2019-12-02',
            'presentacion'=>'Este diplomado aborda el estudio de los contenidos de la
            función pública territorial en promoción de la ética e integridad
             en la gestión gubernamental y sus fundamentos, acorde al marco 
             regulatorio nacional y los requerimientos de la ciudadanía. ',
            'obj_general'=>	'Comprender la importancia de la función Pública 
            y aplicar los contenidos estudiados en el Módulo,
             a la realidad particular de la institución de la
              cual forma parte el participante. ',
            'id_tipo'=>1,
            'carrera_id'=>1,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'activo'=>1,
            'perfil_entrada'=>'El presente Módulo está dirigido a funcionarias y
            funcionarios de la administración pública territorial
             y de los organismos descentralizados que se desempeñen
              en áreas afines o comunes a los temas a ser abordados 
              en este Diplomado. Manejar herramientas de informática
               básica y de Internet (web, email) debido a que parte 
               del diplomado será realizado en modalidad virtual, se 
               requiere además demostrar interés y compromiso en su formación personal para beneficio de la Institución.',
            'perfil_salida'=>'El participante del Módulo será capaz de: Comprender 
            la importancia de la función Pública, Transparencia e
             Integridad en la Administración Pública. Aplicar los 
             contenidos estudiados en el diplomado, a la realidad
              particular de la institución de la cual forma parte, 
              para sugerir la incorporación de medidas preventivas 
              que promuevan ambientes de mayor integridad.',
              ]);
      
      

              DB::table('cursos')->insert([
                  'id'=>	2,	
                'curso'=>'Administración de la Plataforma SECOP II',
                'duracion'=>'Cuarenta (40) Horas 100% virtuales y será certificados 
                previo cumplimiento de los talleres dejados como prácticas virtuales. ',
                'fecha_ini'=>'2019-12-11',
                'presentacion'=>'Es un seminario taller para adquirir habilidades y 
                destrezas para ingresar y navegar a través de la plataforma de SECOP II',
                'obj_general'=>	'El Módulo busca entregar las herramientas a contratistas 
                y proveedores de bienes y servicios para acceder a la plataforma de SECOP
                 II obligatoria para administrar la contratación pública.',
                'id_tipo'=>	2,
                'carrera_id'=>1,
                'created_at'=>NULL,
                'updated_at'=> NULL,
                'activo'=>1,
                'perfil_entrada'=>'El presente Módulo está dirigido a funcionarios y
                funcionarias de la administración pública así como 
                a contratistas y proveedores de servicios y bienes
                 que ofrecen al Estado. El usuario debe manejar herramientas 
                 de informática y habilidades básicas en el uso de computadoras.
                  Debido a que parte del Módulo será realizado en modalidad a distancia, 
                  requiere además que los participantes tengan experiencia básica en el
                   uso de herramientas de Internet (web, email).Para que puedan participar 
                   de manera efectiva del Módulo, los participantes deben tener acceso a 
                   Internet y deben contar con una dirección de correo electrónico.
                   Demostrar interés y compromiso en su formación personal para beneficio de la Institución',
                'perfil_salida'=>'El participante del Módulo será capaz de: Aplicar los contenidos
                 estudiados en el Módulo, a la realidad particular de la institución de la cual forma parte.',
                 ]);
      
      
                DB::table('cursos')->insert([
                    'id'=>3,	
                    'curso'=>'Cierre fiscal entidades territoriales ',
                    'duracion'=>'Cuarenta (30) Horas 100% virtuales y será certificados previo cumplimiento de los talleres dejados como prácticas virtuales. '	,
                    'fecha_ini'=>'2019-12-11',
                    'presentacion'=>'Este seminario se conceptualizará y se 
                    establecerá la importancia sobre los alcances del cierre 
                    fiscal y financiero en particular por tratarse del 
                     de cuatrienio de un gobierno. ',
                    'obj_general'=>	 'Ilustrar a las nuevas administraciones 
                    sobre los contenidos del cierre fiscal y financiero, su 
                    exigencia e interpretación del mismo.   ',
                    'id_tipo'=>	2,
                    'carrera_id'=>1,
                    'created_at'=>NULL,
                    'updated_at'=>NULL,
                    'activo'=>1,
                    'perfil_entrada'=>'El presente Módulo está dirigido a funcionarios y
                    funcionarias de la administración pública incluyendo 
                    a los funcionarios de entidades de control fiscal y 
                    disciplinario así como a contratistas que administran 
                    los recursos públicos.El usuario debe manejar herramientas
                     de informática y habilidades básicas en el uso de computadoras. 
                     Debido a que parte del Módulo será realizado en modalidad 
                     a distancia, se requiere además que los participantes 
                     tengan experiencia básica en el uso de herramientas de Internet 
                     (web, email). Para que puedan participar de manera efectiva del Módulo, 
                     los participantes deben tener acceso a Internet y deben contar con una 
                     dirección de correo electrónico. ',
                    'perfil_salida'=>	'El participante del Módulo será capaz de: 
                    Interpretar el cierre fiscal y financiero de cualquier entidad pública y proyectar su impacto en el siguiente cuatrienio de gobierno. ',]);

                    
              DB::table('cursos')->insert([
                'id'=>	4,	
                'curso'=>	'Derecho de Policía y Derecho Procesal Policivo',
                'duracion'=>'sin definir',
                'fecha_ini'=>'2019-12-14',
                'presentacion'=>'',
                'obj_general'=>'',
                'id_tipo'=>1,
                'carrera_id'=>1,
                'created_at'=> NULL,
                'updated_at'=> NULL,
                'activo'=>0,
                'perfil_entrada'=>'',
                'perfil_salida'=>'',]);
                          

         

    }
}
