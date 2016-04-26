<?php

use Illuminate\Database\Seeder;

class ZonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zonas')->insert([
            ['name' => 'Norte'],
            ['name' => 'Sur'],
            ['name' => 'Este'],
        ]);
    }
}
