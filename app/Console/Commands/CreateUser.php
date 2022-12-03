<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{

    protected $signature = 'create:user {--verified} {name} {email} {password}';

    protected $description = 'Create a new User';

    public function handle()
    {
        $name     = $this -> argument('name');
        $email    = $this -> argument('email');
        $password = $this -> argument('password');

        User::create([
            'name'              => $name,
            'email'             => $email,
            'password'          => Hash::make($password),
            'email_verified_at' => $this -> option('verified') ? now() : null
        ]);

        $this -> info('User Created Successfully. Email : ' . $email . '; password : ' . $password);
    }
}
