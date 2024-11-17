<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        try {
        return view("home.index");
        } catch (\Exception $ex) {
        return $ex->getMessage();
        }
    }
}




