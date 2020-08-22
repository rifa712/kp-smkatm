<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Category;
use App\Tags;
use App\Jurusan;
use App\sambutan;


class BlogController extends Controller
{
    public function index(Posts $post){
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $jurusan = Jurusan::all();
        $data = $post->latest()->take(6)->get();
        $sambutan = sambutan::first();
        return view('blog',compact('data','tag_widget','category_widget','jurusan','sambutan'));
    }

    public function isi_blog($slug){
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $jurusan = Jurusan::all();
        $data = Posts::where('slug',$slug)->get();
        return view('blog.isi_post',compact('data','tag_widget','category_widget','jurusan'));
    }

    public function list_blog(){
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $jurusan = Jurusan::all();
        $data = Posts::latest()->paginate(6);
        return view('blog.list_post',compact('data','tag_widget','category_widget','jurusan'));
    }

    public function isi_jurusan($slug_jurusan){
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $jurusan = Jurusan::all();
        $data = Jurusan::where('slug_jurusan',$slug_jurusan)->get();
        return view('blog.isi_jurusan',compact('jurusan','tag_widget','category_widget','data'));
    }

    public function list_category(category $category){
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $jurusan = Jurusan::all();
        $data = $category->posts()->paginate();
        return view('blog.list_post',compact('data','tag_widget','category_widget','jurusan'));
    }

    public function list_tags(tags $tags){
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $jurusan = Jurusan::all();
        $data = $tags->post()->paginate();
        return view('blog.list_post',compact('data','tag_widget','category_widget','jurusan'));
    }

    public function cari(request $request){
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $jurusan = Jurusan::all();
        $data = Posts::where('judul',$request->cari)->orWhere('judul','like','%'.$request->cari.'%')->paginate(6);
        return view('blog.list_post',compact('data','tag_widget','category_widget','jurusan'));
    }
}
