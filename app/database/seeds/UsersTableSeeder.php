<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [

            ['user_name' => 'satou', 'email' => 'test1@test0mail.com', 'password' => 'aaaaaaaa'],
            ['user_name' => 'suzuki', 'email' => 'test2@test0mail.com', 'password' => 'bbbbbbbbb'],
            ['user_name' => 'yamada', 'email' => 'test3@test0mail.com', 'password' => 'cccccccc'],
            ['user_name' => 'tanaka', 'email' => 'test4@test0mail.com', 'password' => 'dddddddd'],
            ['user_name' => 'nakata', 'email' => 'test5@test0mail.com', 'password' => 'eeeeeeee'],

        ];

        $now = Carbon::now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            DB::table('users')->insert($param);
        }
    }
}
