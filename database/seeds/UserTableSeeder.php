<?php

use Illuminate\Database\Seeder;
use Locadora\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'DEV',
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'), // secret
            'role' => 'DEV',
            'remember_token' => str_random(10)
        ]);

        factory(User::class)->create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('secret'), // secret
            'role' => 'user',
            'remember_token' => str_random(10)
        ]);

        factory(User::class, 10)->create()->each(function ($u) {
            $u->client()->save(factory(\Locadora\Models\Client::class)->make());
        });
    }
}
