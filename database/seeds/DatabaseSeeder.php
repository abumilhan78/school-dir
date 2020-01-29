<?php

use Illuminate\Database\Seeder;
use App\Tabungan;
use App\Customer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([LaboursTableSeeder::class]);
    	
        factory(Tabungan::class, 100)->create();
        factory(Customer::class, 1000)->create();
    }
}
