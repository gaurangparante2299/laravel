<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Membersseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('members')->insert([
            'name'=>Str::random(10),
            'email'=>Str::random(10).'@gmail.com',
            'mobile'=>Str::random(10)
        ]);
    }
}