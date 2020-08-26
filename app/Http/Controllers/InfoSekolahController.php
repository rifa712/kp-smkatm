<?php

namespace App\Http\Controllers;

use App\InfoSekolah;
use Illuminate\Http\Request;

class InfoSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = InfoSekolah::first();
        return view('admin.info.index',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InfoSekolah  $infoSekolah
     * @return \Illuminate\Http\Response
     */
    public function show(InfoSekolah $infoSekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InfoSekolah  $infoSekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(InfoSekolah $infoSekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InfoSekolah  $infoSekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'info' => 'required'
        ]);
        
        $post = InfoSekolah::findorfail($id);
        
        $post_data = [
            'info' => $request->info,
        ];
        

        $post->update($post_data);
        
        return redirect()->route('info.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InfoSekolah  $infoSekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(InfoSekolah $infoSekolah)
    {
        //
    }
}
