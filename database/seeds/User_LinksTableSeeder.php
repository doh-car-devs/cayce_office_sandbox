<?php

use Illuminate\Database\Seeder;
use JeroenZwart\CsvSeeder\CsvSeeder;        //Imports

class User_LinksTableSeeder extends CsvSeeder
{

    public function __construct()
    {
        $this->file = '/database/seeds/csv/usersSidebar.csv';
        $this->mapping = ['id','user_id','name','link','uri','link_group'];
        $this->header = FALSE;
        $this->tablename = 'user_links';
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
