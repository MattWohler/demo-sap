<?php

use Illuminate\Database\Seeder;
use Containers\User\Models\User;
use Containers\Publisher\Models\Publisher;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'first_name' => 'Matt',
            'last_name' => 'Wohler',
            'email' => 'matt.wohler@cdev.global',
        ])->assignRole('admin');
        factory(User::class)->create([
            'first_name' => 'Denis',
            'last_name' => 'Ricard',
            'email' => 'denis.ricard@cdev.global',
        ])->assignRole('admin');
        // ->each(function ($user) {
        //     $publishers = factory(Publisher::class, rand(1, 10))->create();
        //     $user->publishers()->attach($publishers);
        // });

        // factory(User::class, 10)->create()->each(function ($user) {
        //     $publishers = factory(Publisher::class, rand(1, 5))->create();
        //     $user->publishers()->attach($publishers);
        // });
    }
}
