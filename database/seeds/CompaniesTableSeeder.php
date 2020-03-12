<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert(
            [
                'id' => '8dc377aa-1a33-4835-857f-3cba3ef4d435',
                'name' => 'Barbearia o Cabeça',
                'domain' => 'barbeariaocabeca.app.local',
                'database' => 'barbeariaocabeca',
                'hostname' => '127.0.0.1',
                'username' => 'postgres',
                'password' => bcrypt('123456'),
            ]
//            [
//                'name' => 'Mulher Cheirosa',
//                'domain' => 'mulhercheirosa.app.local',
//                'database' => 'mulhercheirosa',
//                'hostname' => '127.0.0.1',
//                'username' => 'postgres',
//                'password' => bcrypt('123456'),
//            ],
//            [
//                'name' => 'Loira Cheirosa',
//                'domain' => 'loiracheirosa.app.local',
//                'database' => 'loiracheirosa',
//                'hostname' => '127.0.0.1',
//                'username' => 'postgres',
//                'password' => bcrypt('123456'),
//            ]
        );

    }
}
