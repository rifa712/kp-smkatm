<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tags;

class PagesController extends Controller
{
    public function visimisi()
    {
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        return view('profil.visidanmisi',compact('category_widget','tag_widget'));
    }

    public function namalambang()
    {
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        return view('profil.namalambang',compact('category_widget','tag_widget'));
    }

    public function hymne()
    {
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        return view('profil.hymne',compact('category_widget','tag_widget'));
    }

    public function strukturorganisasi()
    {
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        return view('profil.strukturorganisasi',compact('category_widget','tag_widget'));
    }

}
