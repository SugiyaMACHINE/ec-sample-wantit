<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $params = [

            ['product_name' => 'banana', 'body' => 'ばなな', 'price' => '300', 'stock' => '30'],
            ['product_name' => 'apple', 'body' => 'りんご', 'price' => '200', 'stock' => '5'],
            ['product_name' => 'laptop', 'body' => 'のーぱそ', 'price' => '100000', 'stock' => '4'],
            ['product_name' => 'pen', 'body' => 'ぺん', 'price' => '200', 'stock' => '20'],

        ];

        $now = Carbon::now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            DB::table('items')->insert($param);
        }
    }
}
