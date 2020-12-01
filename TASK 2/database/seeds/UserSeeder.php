<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $admin = User::Create([
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => bcrypt('admin123')
      ]);
    
    }
}
