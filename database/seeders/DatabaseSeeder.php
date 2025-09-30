<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Admin;
use App\Models\Buyer;
use App\Models\Category;
use App\Models\ClassModel;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Review;
use App\Models\Seller;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Verification;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     // User::factory(10)->create();

    //     // User::firstOrCreate(
    //     //     ['email' => 'test@example.com'],
    //     //     [
    //     //         'name' => 'Test User',
    //     //         'password' => Hash::make('password'),
    //     //         'email_verified_at' => now(),
    //     //     ]
    //     // );

    //     $this->call([
    //         UserSeeder::class
    //     ]);

    // }

    // database/seeders/DatabaseSeeder.php
    public function run(): void
    {

        // bikin seller & product dulu
        $sellers = Seller::factory(10)->create();
        $products = Product::factory(20)->create();

        // cara 1: pakai factory pivot langsung
        Seller::factory(30)->create();

        // cara 2: attach manual dengan pivot
        $sellers->each(function ($seller) use ($products) {
            $seller->products()->attach(
                $products->random(rand(1, 5))->pluck('id')->toArray()
            );
        });

        // entity dasar
        ClassModel::factory(3)->create();
        Teacher::factory(5)->create();   
        Student::factory(10)->create();  
        Account::factory(10)->create();  
        Verification::factory(10)->create();
        Category::factory(5)->create();

        // produk & relasi
        Product::factory(20)->create();

        // user roles
        Buyer::factory(10)->create();
        Seller::factory(5)->create();

        // transaksi
        Order::factory(10)->create();
        OrderDetail::factory(20)->create();
        Review::factory(15)->create();

        // admin
        Admin::factory(3)->create();
    }
}
