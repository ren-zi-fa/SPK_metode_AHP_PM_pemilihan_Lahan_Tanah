<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ShowRoles extends Command
{
    protected $signature = 'roles:show';

    protected $description = 'Display user roles';

    public function handle()
    {
        $users = User::all();

        foreach ($users as $user) {
            $this->info("User: {$user->name}, Role: {$user->role}");
        }
    }
}
