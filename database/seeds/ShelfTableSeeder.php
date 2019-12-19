<?php

use Illuminate\Database\Seeder;

class ShelfTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Shelf::class,15)->create();
    }
}
