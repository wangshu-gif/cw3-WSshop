<?php

use Illuminate\Database\Seeder;

class KeeperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Keeper::class,5)->create();
    }
}
