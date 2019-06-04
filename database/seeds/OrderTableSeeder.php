<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(sisFmw\Models\Order::class, 5)->create()->each(function($o) {
            for($i=0; $i<=2; $i++) {
                $o->items()->save(factory(sisFmw\Models\OrderItem::class)->make());
            }
        });
    }
}
