<?php

use Illuminate\Database\Seeder;

class PartTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('part_types')->insert([
            'name' => 'disk',
        ]);
        DB::table('part_types')->insert([
            'name' => 'cpu',
        ]);
        DB::table('part_types')->insert([
            'name' => 'ram',
        ]);
        DB::table('part_types')->insert([
            'name' => 'motherboard',
        ]);
        DB::table('part_types')->insert([
            'name' => 'controller',
        ]);

    }
}
