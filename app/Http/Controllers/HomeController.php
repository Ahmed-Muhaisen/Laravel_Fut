<?php
namespace App\Http\Controllers;

class HomeController{

    function index(){
        $f='sdd';
        $d='dasd';
return view('welcome',compact('f','d'));
    }

    function update(){

        return "this admin page";
    }


}

?>
