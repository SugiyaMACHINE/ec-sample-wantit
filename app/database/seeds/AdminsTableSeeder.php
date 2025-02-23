<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $params = [

            ['admin_name' => 'alpha', 'password' => 'a0000000'],
            ['admin_name' => 'beta', 'password' => 'b1111111'],
            ['admin_name' => 'gamma', 'password' => 'c2222222']

        ];

        $now = Carbon::now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            DB::table('admins')->insert($param);
        }
    }
}
