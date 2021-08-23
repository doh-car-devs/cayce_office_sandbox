<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function test1(){
        $data = array(
            'name' => 'cayce',
            'age' => 12,
            'gender' => 'male',
        );

        return view('tests.tests1')->with('data', $data);
    }

    public function test2() {
        $data = array(
            'name' => 'cayce',
            'age' => 12,
            'gender' => 'male',
        );
        return view('tests.tests2')->with('data', $data);
    }

    public function viewDTR($id) {
        return $id;
    }
}
