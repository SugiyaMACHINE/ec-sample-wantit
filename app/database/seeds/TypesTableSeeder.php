<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $params = [

            ['category' => 'food', 'path' => '1'],
            ['category' => 'dry', 'path' => '1/1'],
            ['category' => 'Fresh', 'path' => '1/2'],
            ['category' => 'drink', 'path' => '1/1/1'],
            ['category' => 'sweet', 'path' => '1/1/1'],
            ['category' => 'fruit', 'path' => '1/2/1'],
            ['category' => 'electric', 'path' => '2'],
            ['category' => 'hobby', 'path' => '3'],
            ['category' => 'soft', 'path' => '4'],

        ];

        foreach ($params as $param) {
            DB::table('types')->insert($param);
        }
    }
}
