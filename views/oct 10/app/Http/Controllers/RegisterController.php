<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{

    function getregister(Request $request)
    {
        $this->validate($request,
        ['name'=>'required'],
        ['required'=>'Please enter your name']
    );

        $output =$request->name;
        return $output;

    }


}

?>
