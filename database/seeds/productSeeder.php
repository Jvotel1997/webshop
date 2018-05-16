<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          ['product_name' => 'Banaan', 'product_description' => 'Een krom en geel voorwerp', 'product_price' => '500.00'],
          ['product_name' => 'Sla', 'product_description' => 'Een groene bal voor slakken', 'product_price' => '1.49'],
          ['product_name' => 'Tomaat', 'product_description' => 'Jouw kop', 'product_price' => '0.50'],
          ['product_name' => 'Destiny 2', 'product_description' => 'Te verslavend', 'product_price' => '10.00'],
          ['product_name' => 'Sybren', 'product_description' => 'Één of andere slaaf', 'product_price' => '5.00'],
          ['product_name' => 'Slaaf', 'product_description' => "Zo'n ding dat op Sybren lijkt", 'product_price' => '50000.00'],
          ['product_name' => 'Fortnite', 'product_description' => 'Te verslavend voor Sybren', 'product_price' => '30.00'],
          ['product_name' => 'Off To Be The Wizard', 'product_description' => 'Gozer vlucht naar de middeleeuwen om zich voor te doen als tovenaar.', 'product_price' => '10.00'],
          ['product_name' => 'Steelheart', 'product_description' => 'Steelheart heeft superkrachten, maar is zelf niet zo super.', 'product_price' => '15.00']
        ]);
    }
}
