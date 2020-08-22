<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Staff::paginate(10);
        return view('admin.pegawai.index',compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = Staff::paginate(10);
        return view('admin.pegawai.create',compact('pegawai'));
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
            'foto' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'nip' => 'required'
        ]);

        $foto = $request->foto;
        $new_gambar = time().$foto->getClientOriginalName();

        $pegawai = Staff::create([
            'foto' => 'public/uploads/staff/'.$new_gambar,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'nip' => $request->nip,
        ]);

        $foto->move('public/uploads/staff', $new_gambar);
        return redirect()->back()->with('success','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = Staff::findorfail($id);
        return view('admin.pegawai.edit' , compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required',
            'jabatan' => 'required',
            'nip' => 'required',
        ]);
        
        $post = Staff::findorfail($id);

        if($request->has('foto')){
            $foto = $request->foto;
            $new_gambar = time().$foto->getClientOriginalName();
            $foto->move('public/uploads/staff', $new_gambar);

            $post_data = [
                'foto' => 'public/uploads/staff/'.$new_gambar,
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'nip' => $request->nip,
            ];
        }
        else{
            $post_data = [
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'nip' => $request->nip,
            ];
        }

        $post->update($post_data);
        
        return redirect()->route('pegawai.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = Staff::findorfail($id);
        $pegawai->delete();

        return redirect()->back()->with('success' , 'Data berhasil di hapus');
    }
}
