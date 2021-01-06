<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan berita
        $berita = post::all();
        return view('berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ke halaman utnuk posting berita
        return view('Berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi harus diisi
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kategori'=> 'required'
        ]);

        $post = post::create([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "kategori" => $request["kategori"]
        ]);
        return redirect('/berita')->with('success','Berhasil menambahkan berita!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan berita dan komentar
        $post = post::find($id);
        return view('Berita.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit postingan berita
        $update = post::where('id', $id)->update([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "kategori" => $request["kategori"]
        ]);

        return redirect('/berita')->with('success','Berhasil edit berita!');
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
        //hapus berita
        $post = post::destroy($id);
        return redirect('/berita')->with('success','Berhasil hapus berita!');
    }
}
