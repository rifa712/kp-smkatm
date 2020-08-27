<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Category;
use App\Tags;
use App\Content;
use App\Staff;
use App\Jurusan;
use App\Hymne;

class PagesController extends Controller
{
    public function visimisi()
    {
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $jurusan = Jurusan::all();
        return view('profil.visidanmisi',compact('category_widget','tag_widget','jurusan'));
    }

    public function namalambang()
    {
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $jurusan = Jurusan::all();
        return view('profil.namalambang',compact('category_widget','tag_widget','jurusan'));
    }

    public function hymne()
    {
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $jurusan = Jurusan::all();
        $hymne = Hymne::all();
        return view('profil.hymne',compact('category_widget','tag_widget','jurusan','hymne'));
    }

    public function strukturorganisasi()
    {
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $jurusan = Jurusan::all();
        return view('profil.strukturorganisasi',compact('category_widget','tag_widget','jurusan'));
    }

    public function gurustaff()
    {
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $pegawai = Staff::all();
        $jurusan = Jurusan::all();
        return view('profil.gurudanstaff',compact('category_widget','tag_widget','pegawai','jurusan'));
    }

    public function contact(){
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $pegawai = Staff::all();
        $jurusan = Jurusan::all();
        return view('kontak',compact('category_widget','tag_widget','pegawai','jurusan'));
    }

    public function postContact(Request $request){
        $this->validate($request,[
            'nama' => 'required',
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10'
        ]);

        $data = array(
            'nama' => $request->nama,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );

        Mail::send('emails.contact',$data,function($message) use ($data) {
            $message->from($data['email']);
            $message->replyTo($data['email']);
            $message->to('dummyakun6661@gmail.com');
            $message->subject($data['subject']);
        });

        return redirect('/kontak')->with('message', 'Email anda berhasil terkirim!');
    }
}
