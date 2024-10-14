<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;



// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roleSuper = Role::create(['name' => 'super-admin']);

        $user = \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'alamat' => 'Magelang',
            'no_telepon' => '085156182381',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole("super-admin");
    }
}
