<?php

namespace App\Database\Seeds;

use App\Database\Seeds\AuthLoginSeeder;
use App\Database\Seeds\Datatable;
use App\Database\Seeds\LoadMoreSeeder;
use App\Database\Seeds\UserSeeder;
use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(AuthLoginSeeder::class);
        $this->call(Datatable::class);
        // $this->call(Employee::class);
        $this->call(LoadMoreSeeder::class);
        $this->call(UserSeeder::class);
    }
}
