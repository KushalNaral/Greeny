<?php

namespace Database\Seeders;

use App\Models\Vendors;
use Illuminate\Database\Seeder;


class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendor = [
            'name' => 'vendor',
            'email' => 'vendor@vendor.com',
            'password' => bcrypt('password'),
        ];
        Vendors::create($vendor);
    }
}
