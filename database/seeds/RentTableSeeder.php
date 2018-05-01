<?php

use Illuminate\Database\Seeder;

class RentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Locadora\Models\Rent::class, 5)->create()->each(function ($r) {
            for ($i = 0; $i <= 5; $i++ ) {
                $r->items()->save(factory(\Locadora\Models\RentItems::class)->make([
                    'vehicle_id' => rand(1,5),
                    'price' => 50,
                ]));
            }
        });
    }
}
