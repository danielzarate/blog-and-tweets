<?php

use Illuminate\Database\Seeder;
use App\Entry;
use App\User;

class EntriesTableSeeder extends Seeder
{

    public function run()
    {
        $users=User::all();
        $users->each(function($user){
            factory (Entry::class,10)->create([
                'user_id'=>$user->id
            ]);

        });
        
    }
}
