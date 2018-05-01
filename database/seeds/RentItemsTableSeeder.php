<?php

use Illuminate\Database\Seeder;

class RentItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Locadora\Models\RentItems::class, 2)->create();
    }
}
