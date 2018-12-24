<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ketring;

class KetringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function ketring()
    {
        //
        return view('crud.ketring');
    }

    public function liat()
    {
        //
        $ketrings = Ketring::orderBy('id','DESC')->paginate(4);
        return view('crud.read.showketring',compact('ketrings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeketring(Request $request)
    {
        //
        $this->validate($request,
        ['harga' => 'required']);

        $tambah = new Ketring();
        $tambah->harga = $request['harga'];
        

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("images/", $fileName);

        $tambah->gambar = $fileName;
        $tambah->save();

        return redirect()->to('/');
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
        $tampilkan = Ketring::find($id);
        return view('crud.read.rmketring',compact('tampilkan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
