<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */




    public function run()
    {

        $param =
            [
                'user_id' => '1',
                'last_name' => 'satou',
                'first_name' => 'tarou',
                'email' => 'test1@test0mail.com',
                'tel' => 'c2222222',
                'address' => 'gamma',
                'sender_id' => '1'
            ];

        DB::table('orders')->insert($param);
    }
}
