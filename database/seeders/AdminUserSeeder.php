<?php

namespace Database\Seeders;

use App\Models\BobotLangsung;
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
        $user = User::create([
            'name' => 'SuperAdmin123', 
            'email' => 'admin@gmail.com',
            'email_verified_at'=>'2024-05-09 07:37:39',
            'password' => bcrypt('12345678')
        ]);
        $init_bobot_langsung = BobotLangsung::create(
            [
                'id_user'   => $user->id,
                'c1'        => 1,
                'c2'        => 1,
                'c3'        => 1,
                'c4'        => 1,
                'c5'        => 1,
                'c6'        => 1,
                'c7'        => 1,
                
            ]
        );
        $userRole = Role::create(['name' => 'User']);
        $userPermission = Permission::where('name', 'user')->first();
        $userRole->syncPermissions($userPermission);
        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
