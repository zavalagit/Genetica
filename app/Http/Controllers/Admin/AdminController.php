<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {

        //vista de una grafica 
        return view('admin.admin.index');
    }

   
}
