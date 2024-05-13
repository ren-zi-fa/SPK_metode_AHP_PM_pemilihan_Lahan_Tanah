<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = 
        [
            [
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'email_verified_at'=>'2024-05-13 18:50:29',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'email_verified_at'=>'2024-05-13 18:50:29',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'user3',
                'email' => 'user3@gmail.com',
                'email_verified_at'=>'2024-05-13 18:50:29',
                'password' => Hash::make('12345678'),
            ],
            
        ];

        foreach ($users as $user) 
        {
            $this_user = User::create(
                [
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'email_verified_at'=>$user['email_verified_at'],
                    'password' => $user['password'],
                ]
            );
            $this_user->assignRole(['User']);
          
  

            // $init_bobot_langsung = BobotLangsung::create(
            //     [
            //         'id_user'   => $this_user->id,
            //         'c1'        => 1,
            //         'c2'        => 1,
            //         'c3'        => 1,
            //         'c4'        => 1,
            //         'c5'        => 1,
            //         'c6'        => 1,
            //         'c7'        => 1,
                    
            //     ]
            // );
        }
        $userPermission = Permission::where('name', 'user-permission')->first();
        $userBiasa = Role::where('name', 'User')->first();
        $userBiasa->syncPermissions($userPermission);
    }
}
