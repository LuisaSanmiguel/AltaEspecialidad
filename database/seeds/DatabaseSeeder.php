<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            DepartamentosTableSeeder::class,
            CiudadesTableSeeder::class,
            TiposTableSeeder::class,
           RolesTableSeeder::class,
        CarrerasTableSeeder::class,
        CursosTableSeeder::class,
        CaracteristicasTableSeeder::class,
        Caracteristicas_cursosTableSeeder::class,
        ]);
    }
}
