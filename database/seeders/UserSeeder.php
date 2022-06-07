<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Kabum!',
            'phone' => '(19) 2114-4444',
            'document' => '05570714001201',
            'type' => 'Cliente',
            'email' => 'faleconosco@kabum.com.br',
            'password' => Hash::make('123123123')
        ]);
        DB::table('users')->insert([
            'name' => 'Guldi',
            'phone' => '(11) 4933-7723',
            'document' => '14055516000148',
            'type' => 'Cliente',
            'email' => 'atendimento@guldi.com.br',
            'password' => Hash::make('123123123')
        ]);
        DB::table('users')->insert([
            'name' => 'Nestlé',
            'phone' => '(75) 2101-7777',
            'document' => '	60409075000152',
            'type' => 'Cliente',
            'email' => 'falecom@nestle.com.br',
            'password' => Hash::make('123123123')
        ]);
        DB::table('users')->insert([
            'name' => 'Pirelli',
            'phone' => '(75) 3603-7000',
            'document' => '59179838000137',
            'type' => 'Cliente',
            'email' => 'sac.pneus@pirelli.com',
            'password' => Hash::make('123123123')
        ]);
        DB::table('users')->insert([
            'name' => 'Dulub',
            'phone' => '08007303070',
            'document' => '05092901000921',
            'type' => 'Cliente',
            'email' => 'dulub@dulub.com.br',
            'password' => Hash::make('123123123')
        ]);
        DB::table('users')->insert([
            'name' => 'Translogic',
            'phone' => '75983014336',
            'document' => '10101010000110',
            'type' => 'Transporte',
            'email' => 'translogic@gmail.com',
            'password' => Hash::make('123123123')
        ]);
    }
}
