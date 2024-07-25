<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function insertproduct(){
        return view('admin.insertproduct');
    }

    public function insert(Request $req){
        
    }
}
