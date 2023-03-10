<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{

    public function index()
    {
    	$data_kategori = \App\Kategori::all();

    	return view('kategori.index',['data_kategori' => $data_kategori]);
    }

    public function create(Request $request)
    {
        \App\Kategori::create($request->all());

        return redirect ('/kategori')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $kategori = \App\Kategori::find($id);

        return view('kategori/edit', ['kategori' => $kategori]);
    }

    public function update(Request $request ,$id)
    {       
        $kategori = \App\Kategori::find($id);
        $kategori->update($request->all());

        return redirect ('/kategori')->with('sukses', 'Data Kategori berhasil di update');
    }

    public function delete($id)
    {
        $kategori = \App\Kategori::find($id);
        $kategori->delete($kategori);

        return redirect('/kategori')->with('sukses', 'Data Kategori berhasil di hapus');
    }

//////////////////////////////////////////////////////////////////////////////////////////////////

}
