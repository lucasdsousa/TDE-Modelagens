<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coletas')->insert([
            'parada' => 1,
            'cliente' => 1,
            'peso' => 2180.00,
            'data' => '2022-06-07',
            'horario' => '20:40:00',
            'status' => 'Aguardando Coleta'
        ]);
        DB::table('coletas')->insert([
            'parada' => 2,
            'cliente' => 2,
            'peso' => 500.00,
            'data' => '2022-06-07',
            'horario' => '12:20:00',
            'status' => 'Aguardando Coleta'
        ]);
        DB::table('coletas')->insert([
            'parada' => 3,
            'cliente' => 3,
            'peso' => 10000.00,
            'data' => '2022-06-08',
            'horario' => '16:20:00',
            'status' => 'Aguardando Coleta'
        ]);
        DB::table('coletas')->insert([
            'parada' => 4,
            'cliente' => 4,
            'peso' => 6300.00,
            'data' => '2022-06-08',
            'horario' => '13:00:00',
            'status' => 'Aguardando Coleta'
        ]);
        DB::table('coletas')->insert([
            'parada' => 5,
            'cliente' => 5,
            'peso' => 1020.00,
            'data' => '2022-06-09',
            'horario' => '14:00:00',
            'status' => 'Aguardando Coleta'
        ]);
    }
}
