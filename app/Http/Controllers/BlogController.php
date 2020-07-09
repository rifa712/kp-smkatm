<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Category;
use App\Tags;

class BlogController extends Controller
{
    public function index(Posts $post){
        $category_widget = Category::all();
        $taglist = Tags::all();

        $data = $post->latest()->take(6)->get();
        return view('blog',compact('data','taglist','category_widget'));
    }

    public function isi_blog($slug){
        $category_widget = Category::all();
        $data = Posts::where('slug',$slug)->get();
        return view('blog.isi_post',compact('data','category_widget'));
    }

    public function list_blog(){
        $category_widget = Category::all();
        $data = Posts::latest()->paginate(6);
        return view('blog.list_post',compact('data','category_widget'));
    }

    public function list_category(category $category){
        $category_widget = Category::all();
        $data = $category->posts()->paginate();
        return view('blog.list_post',compact('data','category_widget'));
    }

    public function cari(request $request){
        $category_widget = Category::all();
        $data = Posts::where('judul',$request->cari)->orWhere('judul','like','%'.$request->cari.'%')->paginate(6);
        return view('blog.list_post',compact('data','category_widget'));
    }
}
