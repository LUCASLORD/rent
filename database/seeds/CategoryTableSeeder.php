<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Locadora\Models\Category::class, 5)->create()->each(function ($c) {
            for ($i = 0; $i <= 5; $i++ ) {
                $c->vehicle()->save(factory(\Locadora\Models\Vehicle::class)->make());
            }
        });
    }
}
