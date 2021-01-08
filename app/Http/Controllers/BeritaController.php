<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use DB;
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
        return view('Berita.index', compact('berita'));
       
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
        //dd($request->all());
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
        return redirect('home')->with('success','Berhasil menambahkan berita!');
       
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
        $berita = post::find($id);
        // buat ngecek
        //dd($berita);
        return view('Berita.show', compact('berita'));
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

        $berita = post::find($id);
        return view('berita.edit', compact('berita'));
        
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
        //untuk menyimpan hasil editan

        $update = post::where('id', $id)->update([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "kategori" => $request["kategori"]
        ]);

       return redirect('/home')->with('success','Berhasil edit berita!');
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
