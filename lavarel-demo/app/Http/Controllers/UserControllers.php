<?php


namespace App\Http\Controllers;


//use http\Env\Request;
use Illuminate\Http\Request;

class UserControllers extends Controller
{
    public function store(Request $request)
    {
        $name = $request->input("name");
        //
    }

    public function update(Request $request, $id)
    {
        $id = $request->input("id");
        echo $id;
    }
}

;

/**
 * -----------------------------------------------------------
 */

