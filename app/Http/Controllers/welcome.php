<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcome extends Controller
{
    public function show(){
$name="Ahmed";
$age=22;
$r='sdd0';
 return View('Home', compact('name','age','r'));
    }
}



