<?php

use Illuminate\Database\Seeder;
use App\Tag;
class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $t = new Tag;
        $t->name ='Max';
        $t->code ='201-886';
        $t->commodity_id=1;
        $t->save();
        factory(App\Tag::class,50)->create();
    }
}
