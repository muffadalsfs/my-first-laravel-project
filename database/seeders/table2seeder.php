<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class table2seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tabel2')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10) . '@gmai.com',
            'address' => Str::random(10)
        ]);
    }
}
