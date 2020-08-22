<?php

namespace App\Http\Controllers;

use App\Hymne;
use Illuminate\Http\Request;

class HymneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hymne = Hymne::paginate(10);
        return view('admin.hymne.index',compact('hymne'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hymne.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'lirik' => 'required'
        ]);

        $hymne = Hymne::create([
            'judul' => $request->judul,
            'lirik' => $request->lirik,
        ]);

        return redirect()->back()->with('success','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hymne  $hymne
     * @return \Illuminate\Http\Response
     */
    public function show(Hymne $hymne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hymne  $hymne
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hymne = Hymne::findorfail($id);
        return view('admin.hymne.edit' , compact('hymne'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hymne  $hymne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'judul' => 'required',
            'lirik' => 'required'
        ]);
        
        $hymne = Hymne::findorfail($id);

        $post_data = [
            'judul' => $request->judul,
            'lirik' => $request->lirik
        ];

        $hymne->update($post_data);
        
        return redirect()->route('hymne.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hymne  $hymne
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hymne = Hymne::findorfail($id);
        $hymne->delete();

        return redirect()->back()->with('success' , 'Data berhasil di hapus');
    }
}
