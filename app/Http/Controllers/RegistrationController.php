<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //



    function  index(){

    return view('index');



    }





    function   booking(){

          return view('booking');

    } 
   function  login(){


      return   view('login');
      
   }
}
