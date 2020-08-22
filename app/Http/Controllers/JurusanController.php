<?php

namespace App\Http\Controllers;

use App\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::paginate(10);
        return view('admin.jurusan.index',compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jurusan.create');
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
            'nama_jurusan' => 'required',
            'gambar_jurusan' => 'required',
            'deskripsi' => 'required',
            'visi' => 'required',
            'misi' => 'required'
        ]);

        $gambar_jurusan = $request->gambar_jurusan;
        $new_gambar = time().$gambar_jurusan->getClientOriginalName();

        $jurusan = Jurusan::create([
            'nama_jurusan' => $request->nama_jurusan,
            'gambar_jurusan' => 'public/uploads/posts/'.$new_gambar,
            'deskripsi' => $request->deskripsi,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'slug_jurusan' => Str::slug($request->nama_jurusan)
        ]);

        $gambar_jurusan->move('public/uploads/posts', $new_gambar);
        return redirect()->back()->with('success','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = Jurusan::findorfail($id);
        return view('admin.jurusan.edit' , compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_jurusan' => 'required',
            'deskripsi' => 'required',
            'visi' => 'required',
            'misi' => 'required'
        ]);
        
        $jurusan = Jurusan::findorfail($id);

        if($request->has('gambar_jurusan')){
            $gambar_jurusan = $request->gambar_jurusan;
            $new_gambar = time().$gambar_jurusan->getClientOriginalName();
            $gambar_jurusan->move('public/uploads/posts', $new_gambar);

            $post_data = [
                'nama_jurusan' => $request->nama_jurusan,
                'gambar_jurusan' => 'public/uploads/posts/'.$new_gambar,
                'deskripsi' => $request->deskripsi,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'slug_jurusan' => Str::slug($request->nama_jurusan)
            ];
        }
        else{
            $post_data = [
                'nama_jurusan' => $request->nama_jurusan,
                'deskripsi' => $request->deskripsi,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'slug_jurusan' => Str::slug($request->nama_jurusan)
            ];
        }

        $jurusan->update($post_data);
        
        return redirect()->route('jurusan.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::findorfail($id);
        $jurusan->delete();

        return redirect()->back()->with('success' , 'Data berhasil di hapus');
    }
}
