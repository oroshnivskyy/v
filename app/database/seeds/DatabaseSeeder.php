<?php

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

//        $this->call('ProductTableSeeder');
        $this->call('ProductGroupTableSeeder');
    }

}

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        Product::truncate();
    }
}
