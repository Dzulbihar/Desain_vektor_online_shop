<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portofolio;
use App\Kategori;

class PortofolioController extends Controller
{

    public function index()
    {
    	$data_portofolio = \App\Portofolio::all();
        //karya
        $karya = \App\Kategori::all(); 

    	return view('portofolio.index',['data_portofolio' => $data_portofolio , 'karya' => $karya]);
    }

    public function create(Request $request)
    {
 //       \App\Portofolio::create($request->all());

        $portofolio = \App\Portofolio::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $portofolio->foto = $request->file('foto')->getClientOriginalName();
            $portofolio->save();
        }

        return redirect ('/portofolio')->with('sukses', 'Data Portofolio berhasil di tambah');
    }

    public function edit($id)
    {
        $portofolio = \App\Portofolio::find($id);

        return view('portofolio/edit', ['portofolio' => $portofolio]);
    }

    public function update(Request $request ,$id)
    {       
        $portofolio = \App\Portofolio::find($id);
        $portofolio->update($request->all());

        return redirect ('/portofolio')->with('sukses', 'Data Portofolio berhasil di update');
    }

    public function delete($id)
    {
        $portofolio = \App\Portofolio::find($id);
        $portofolio->delete($portofolio);

        return redirect('/portofolio')->with('sukses', 'Data Portofolio berhasil di hapus');
    }

//////////////////////////////////////////////////////////////////////////////////////////////////

    public function customer($id)
    {
        $customer = \App\Customer::find($id);
        $portofolio = Portofolio::where('id', $id)->first();

//vektor
        $vektor = \App\Customer::all();     

        return view('portofolio.customer',['customer' => $customer, 'portofolio' => $portofolio, 'vektor' => $vektor]);
    }

        public function adddesain(Request $request ,$idportofolio)
    {
        //dd($request->all());
        $portofolio = \App\Portofolio::find($idportofolio);

        $portofolio->customer()->attach($request->customer, ['nama' => $request->nama, 'alamat' => $request->alamat, 'nomor_wa' => $request->nomor_wa]);

        return redirect('portofolio/'.$idportofolio.'/customer')->with('sukses', 'Data Pesanan Vektor berhasil dimasukkan, Silahkan bisa konfirmasi nomor wa 089613658060 untuk proses lebih lanjut');
    }

}
