<?php

use App\Supplier;
use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = new Supplier([
            'name' => 'Creature',
            'email' => 'creature@gmail.com',
            'phoneNumber' => '09999999',
            'address' => '123 abc street'
        ]);
        $supplier->save();

        $supplier = new Supplier([
            'name' => 'Aurelia',
            'email' => 'Aurelia@gmail.com',
            'phoneNumber' => '0888888',
            'address' => '123 abc street'
        ]);
        $supplier->save();
    }
}
