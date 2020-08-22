<?php

namespace App\Http\Controllers;

use App\sambutan;
use Illuminate\Http\Request;

class SambutanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sambutan = sambutan::first();
        return view('admin.sambutan.index',compact('sambutan'));
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
     * @param  \App\sambutan  $sambutan
     * @return \Illuminate\Http\Response
     */
    public function show(sambutan $sambutan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sambutan  $sambutan
     * @return \Illuminate\Http\Response
     */
    public function edit(sambutan $sambutan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sambutan  $sambutan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'isi_sambutan' => 'required'
        ]);
        
        $post = sambutan::findorfail($id);

        if($request->has('foto_sambutan')){
            $foto_sambutan = $request->foto_sambutan;
            $new_gambar = time().$foto_sambutan->getClientOriginalName();
            $foto_sambutan->move('public/uploads/sambutan', $new_gambar);

            $post_data = [
                'foto_sambutan' => 'public/uploads/sambutan/'.$new_gambar,
                'isi_sambutan' => $request->isi_sambutan,
            ];
        }
        else{
            $post_data = [
                'isi_sambutan' => $request->isi_sambutan,
            ];
        }

        $post->update($post_data);
        
        return redirect()->route('sambutan.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sambutan  $sambutan
     * @return \Illuminate\Http\Response
     */
    public function destroy(sambutan $sambutan)
    {
        //
    }
}
