<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Auth\User;

class MakeUserWriter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bainans:makeUserWriter {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Let a user be a writer';


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = User::where('email', $this->argument('email'))->first();
        if (!$user) {
            $this->error('User not found');
            return;
        }

        $user->is_writer = true;
        $user->save();
        $this->info("The user {$user->name} is now a writer.");
    }
}
