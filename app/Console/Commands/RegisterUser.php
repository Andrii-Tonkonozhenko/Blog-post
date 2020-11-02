<?php

namespace App\Console\Commands;

use App\Services\CreateUserService;
use Illuminate\Console\Command;


class RegisterUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'register:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Register new user';
    /**
     * User model.
     *
     * @var object
     */
    private $user;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(CreateUserService $user)
    {
        parent::__construct();

        $this->user = $user;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() : void
    {
        $name = $this->ask('Name');
        $email = $this->ask('Email');
        $password = $this->ask('Password');


        $user = $this->user->createUser($name,$email,$password);
    }

}
