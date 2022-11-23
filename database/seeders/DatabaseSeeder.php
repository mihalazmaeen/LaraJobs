<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(5)->create();
        $user=User::factory()->create([
            'name'=>'John Doe',
            'email'=>'john@gmail.com'
        ]);
         Listing::factory(6)->create([
            'user_id'=>$user->id
         ]);

        //  Listing::create([
        //     'title'=>'laravel Senior Developer',
        //     'tags'=>'laravel, javascript',
        //     'company'=>'Taka nai Group',
        //     'location'=>'Gulsha-1, Dhaka',
        //     'email'=>'email@email.com',
        //     'website'=>'takanaigrp.com',
        //     'description'=>'lorem ipsum no taka nai isu
        //     mahsgsd sjdhsdjshdjs juytt okepweiopweiw 
        //     dfdfk dhkfjdk kjdfjeirjeir ijfidfjdkfkjkj'
        //  ]);
        //  Listing::create([
        //     'title'=>'Javascript Senior Developer',
        //     'tags'=>'javascript, NodeJs',
        //     'company'=>'Taka de Group',
        //     'location'=>'Gulsha-1, Dhaka',
        //     'email'=>'email@email.com',
        //     'website'=>'takanaigrp.com',
        //     'description'=>'lorem ipsum no taka nai isu
        //     mahsgsd sjdhsdjshdjs juytt okepweiopweiw 
        //     dfdfk dhkfjdk kjdfjeirjeir ijfidfjdkfkjkj'
        //  ]);

    }
       
}
