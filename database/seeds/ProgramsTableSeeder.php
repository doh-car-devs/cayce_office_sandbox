<?php

use Illuminate\Database\Seeder;
use JeroenZwart\CsvSeeder\CsvSeeder;        //Imports

class ProgramsTableSeeder extends CsvSeeder
{

    public function __construct()
    {
        $this->file = '/database/seeds/csv/programs.csv';
        $this->mapping = ['id', 'division_id', 'section_id','program_abbr','program_name'];
        $this->header = FALSE;
        $this->tablename = 'programs';
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
