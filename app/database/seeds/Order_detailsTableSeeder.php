<?php

use Illuminate\Database\Seeder;

class Order_detailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $param = [

            'order_id' => '1',
            'item_id' => '1',
            'amount' => '240',
            'quantity' => '2',

        ];

        DB::table('order_details')->insert($param);
    }
}
