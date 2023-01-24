<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class Customer_portofolioController extends Controller
{

    public function index(Request $request)
    {
        $jumlah_pemesan = DB::select('select * from `customer_portofolio`');

        return view('jumlah_pemesan.order', ['jumlah_pemesan' => $jumlah_pemesan]);
    }

}
