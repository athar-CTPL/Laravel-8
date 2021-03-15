<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'athar';
        $user->email = 'athar@caperminttechnologies.com';
        $user->phone = 9558239911;
        $user->status = 1;
        $user->password = Hash::make('12345678');
        $user->save();


        $user = new User();
        $user->name = 'ahmed';
        $user->email = 'ahmed@caperminttechnologies.com';
        $user->phone = 9558230011;
        $user->status = 1;
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name = 'athar';
        $user->email = 'marfatia@caperminttechnologies.com';
        $user->phone = 9558231111;
        $user->status = 1;
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name = 'test';
        $user->email = 'test@gmail.com';
        $user->phone = 9558232211;
        $user->status = 0;
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name = 'test1';
        $user->email = 'test1@gmail.com';
        $user->phone = 9558233311;
        $user->status = 1;
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name = 'test2';
        $user->email = 'test2@gmail.com';
        $user->phone = 9558234411;
        $user->status = 0;
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name = 'test3';
        $user->email = 'test3@caperminttechnologies.com';
        $user->phone = 9558235511;
        $user->status = 1;
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name = 'testing';
        $user->email = 'testing@gmail.com';
        $user->phone = 9558236611;
        $user->status = 0;
        $user->password = Hash::make('12345678');
        $user->save();


    }
}
