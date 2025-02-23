<?php

use Illuminate\Database\Seeder;

class SendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $param = [

            'postal_code' => '5555555',

            'send_address' => 'XXXXXXXXXXXX',

        ];

        DB::table('senders')->insert($param);
    }
}
