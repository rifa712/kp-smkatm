<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class PagesController extends Controller
{
    public function visimisi()
    {
        $category_widget = Category::all();
        return view('profil.visidanmisi',compact('category_widget'));
    }

    public function namalambang()
    {
        $category_widget = Category::all();
        return view('profil.namalambang',compact('category_widget'));
    }

    public function hymne()
    {
        $category_widget = Category::all();
        return view('profil.hymne',compact('category_widget'));
    }

    public function strukturorganisasi()
    {
        $category_widget = Category::all();
        return view('profil.strukturorganisasi',compact('category_widget'));
    }

}
