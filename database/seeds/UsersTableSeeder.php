<?php

use Illuminate\Support\Facades\Storage;
use JeroenZwart\CsvSeeder\CsvSeeder;        //Imports
use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends CsvSeeder
{

    public function __construct()
    {
        $this->file = '/database/seeds/csv/users.csv';
        $this->mapping = ['id', 'name', 'name_middle','name_family','email','password','access_level','access_tokens','access_group','section_id','division_id','prefix','designation','name_extension'];
        $this->header = FALSE;
        // $this->hashable = ['password', 'api_token'];
        $this->tablename = 'users';
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
