<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about(){
        return "Achmad Wibawa, 2041720174";
    }
    public function articles($id){
        return "Halaman Artikel Dengan ID ".$id;
    }
}
