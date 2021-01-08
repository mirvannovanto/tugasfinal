<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class komentarController extends Controller
{
    //
    public function store(Request $request)
    {
        //dd($request->all());
        //validasi harus diisi
        $request->validate([
            //validasi isi table komentar
            'komentar' => $request["komentar"]
        ]);

        $post = post::create([
            //isi table komentar
            'komentar' => $request["komentar"]
        ]);
        return redirect('berita.show')->with('success','Berhasil menambahkan berita!');
       
    }
}
