<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class UsersCommand extends Command
{
    protected $signature = 'users';

    protected $description = 'List of users';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $headers = ['id', 'name', 'email', 'role'];

        $users = User::all(['id', 'name', 'email'])->toArray();

        foreach ($users as $index => $user) {
            $users[$index] += [
                'role' => User::find($user['id'])->role->name,
            ];
        }

        if ($users) {
            $this->table($headers, $users);
        } else {
            $this->info('No users');
        }
    }
}
