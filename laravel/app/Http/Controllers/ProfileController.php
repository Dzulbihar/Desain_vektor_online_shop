<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Portofolio;
use App\Customer_portofolio;

class ProfileController extends Controller
{

    public function index()
    {
    	$data_portofolio = \App\Portofolio::all();
        $data_customer = \App\Customer::all();
    	return view('profile.index',['data_portofolio' => $data_portofolio, 'data_customer' => $data_customer]);
    }

}
