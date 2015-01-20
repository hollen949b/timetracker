<?php
class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Brandon Hollenbeck',
            'username' => 'hollen949b',
            'email'    => 'hollen949b@gmail.com',
            'password' => Hash::make('dev123'),
        ));
    }

}