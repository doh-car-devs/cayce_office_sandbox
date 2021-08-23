<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Govid extends Model
{
    protected $table = 'govid';

    public function deletemegovid($id){
        $this->model::destroy($id);
    }
}
