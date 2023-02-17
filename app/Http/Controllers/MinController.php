<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MinController extends Controller
{
    public function index(){
        $title = "الواجهة الرئيسية";
        return view('layouts.minbag',compact(
            'title'
        ));
    }

}