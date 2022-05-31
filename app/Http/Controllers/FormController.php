<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request){
        $form = new Form();
        $form->uname=$request->uname;
        $form->password=$request->password;
        $form->save();
    }
}
