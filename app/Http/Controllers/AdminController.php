<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    $pg_title='پنل مدیریت';
    return view('back.main', compact('pg_title'));
    }
}