<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SetupTestDatabase extends Command
{
    protected $signature = 'setup:test-database';
    protected $description = 'Set up the test database from scratch';

    public function handle()
    {
        // Drop the test database if it exists
        $this->call('migrate:fresh', ['--database' => 'mysql_testing']);

        // Run migrations for the test database
        $this->call('migrate', ['--database' => 'mysql_testing']);

        // Seed the test database with necessary data
        $this->call('db:seed', ['--class' => 'DatabaseSeeder', '--database' => 'mysql_testing']);

        $this->info('Test database set up successfully!');
    }
}
