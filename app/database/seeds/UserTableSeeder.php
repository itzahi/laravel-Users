<?php
/**
 * Created by PhpStorm.
 * User: tzahi
 * Date: 10/5/14
 * Time: 2:14 PM
 */

class UserTableSeeder extends \Illuminate\Database\Seeder{

    public function run()
    {
        // to use non Eloquent-functions we need to unguard
        Eloquent::unguard();

        // All existing users are deleted !!!
       // DB::table('users')->delete();

        // add user using Eloquent
        $user = new User;
        $user->username = 'admin';
        $user->email = 'itzahi@gmail.com';
        $user->password = Hash::make('password');
        $user->last_name = 'Weizman';
        $user->first_name = 'Tzahi';
        $user->save();

        // alternativ to eloquent we can also use direct database-methods
        /*
        User::create(array(
            'username'  => 'admin',
            'password'  => Hash::make('password'),
            'email'     => 'admin@localhost'
        ));
        */
    }
} 