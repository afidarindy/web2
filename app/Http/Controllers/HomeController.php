<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexHome() {
    	return view('home');
    }
    public function indexPertama() {
    	return view('pertama');
    }
    public function indexKedua() {
    	return view('kedua');
    }
    public function indexKetiga() {
    	return view('ketiga');
    }
}
