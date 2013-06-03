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
    }

}

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('product')->delete();
    }
}