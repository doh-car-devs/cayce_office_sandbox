<?php

use Illuminate\Database\Seeder;
use JeroenZwart\CsvSeeder\CsvSeeder;        //Imports

class EmployeeTableSeeder extends CsvSeeder
{

    public function __construct()
    {
        $this->file = '/database/seeds/csv/employees.csv';
        $this->mapping = ['id', 'IDNumber', 'type','fullname','byname','designation','avatar','division_id','section_id'];
        $this->header = FALSE;
        $this->tablename = 'employees';
        $this->delimiter = ',';
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();
        parent::run();
    }
}
