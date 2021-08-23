<?php

use Illuminate\Support\Facades\Storage;
use JeroenZwart\CsvSeeder\CsvSeeder;        //Imports
use Illuminate\Database\Seeder;
use App\User;

class DeliverableTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->connection = 'mysql_2';
        $this->file = '/database/seeds/csv/functions.csv';
        $this->mapping = ['id', 'function', 'division_id', 'section_id'];
        $this->header = FALSE;
        // $this->hashable = ['password', 'api_token'];
        $this->tablename = 'deliverables';
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
