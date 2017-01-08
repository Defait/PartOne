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
            'type' => 'disk',
        ]);
        DB::table('part_types')->insert([
            'type' => 'cpu',
        ]);
        DB::table('part_types')->insert([
            'type' => 'ram',
        ]);
        DB::table('part_types')->insert([
            'type' => 'motherboard',
        ]);
        DB::table('part_types')->insert([
            'type' => 'controller',
        ]);

    }
}
