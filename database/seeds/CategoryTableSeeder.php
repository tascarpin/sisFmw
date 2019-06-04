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
        //
        factory(sisFmw\Models\Category::class, 5)->create()->each(function($u) {
            for($i=0; $i<=10; $i++) {
                $u->products()->save(factory(sisFmw\Models\Product::class)->make());
            }
        });
    }
}
