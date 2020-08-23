<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('isAdmin');
        $user = User::paginate(10);
        return view('admin.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('isAdmin');
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('isAdmin');
        $this->validate($request,[
            'name' => 'required|min:3|max:100',
            'email' => 'required|email',
            'tipe' => 'required'
        ]);

        if($request->input('password')){
            $password = bcrypt($request->password);
        }
        else{
            $password = bcrypt('tanpapassword');
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'tipe' => $request->tipe,
            'password' => $password
        ]);
        return redirect()->back()->with('success','User berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('isAdmin');
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('isAdmin');
        $this->validate($request,[
            'name' => 'required|min:3|max:100',
            'tipe' => 'required'
        ]);

        if($request->input('password')){
            $data_upadate = [
                'name' => $request->name,
                'tipe' => $request->tipe,
                'password' => bcrypt($request->password)
            ];
        }
        else{
            $data_upadate = [
                'name' => $request->name,
                'tipe' => $request->tipe
            ];
        }
        $user = User::find($id);
        $user->update($data_upadate);

        return redirect()->route('user.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('isAdmin');
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('success','Berhasil dihapus');
    }
}
