<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->truncate();
        DB::table('tasks')->truncate();
        

        $users = User::all();
        $users->each (function($user) {
        Subject::factory()->hasTasks(10)
        ->for($user)->create();
        });
  
    }
}
