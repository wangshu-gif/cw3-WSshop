<?php

use Illuminate\Database\Seeder;
use App\Commodity;
class CommodityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        factory(App\Commodity::class,50)->create();
    }
}
