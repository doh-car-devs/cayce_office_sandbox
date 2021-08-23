<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        // $this->command->info('============Users Table Seeded!============');

        // $this->call('User_LinksTableSeeder');
        // $this->command->info('============UserLinks Table Seeded!============');

        // $this->call('ProgramsTableSeeder');
        // $this->command->info('============Programs Table Seeded!============');

        // $this->call('DivisionsAndSectionsTableSeeder');
        // $this->command->info('============Divisions and Sections Table Seeded!============');

        $this->call('EmployeeTableSeeder');
        $this->command->info('============Employee Table Seeded!============');

        // $this->call('DeliverableTableSeeder');
        // $this->command->info('============Deliverable Table Seeded!============');
    }
}
