<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'email_verified_at'=>'2024-05-13 18:50:29',
            'password'=> Hash::make('12345678'),
        ]);
    
        $permissions = Permission::pluck('id','id')->all();
        $adminRole = Role::where('name', 'Admin')->first();
        $adminRole->syncPermissions($permissions);
        $admin->assignRole([$adminRole->id]);
    }
}
