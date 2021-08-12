<?php

namespace Database\Seeders;

use Illuminate\Cache\DatabaseLock;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directorios')->insert([
            [
                'nombre'=> 'Debora Paradiso',
                'direccion'=> 'Juan B Justo 76',
                'telefono'=> '67841545',
                'foto'=> null
            ],
           [
               'nombre'=> 'Sebastian Mazoud',
               'direccion'=> 'Juan B Justo 76',
               'telefono'=> '22947971',
               'foto'=> null
           ],    
        ]) ;   
}
}