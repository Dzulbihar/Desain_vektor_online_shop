<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Clean;
//use App\Incident;
use App\Portofolio;
//use App\Clean_portofolio;
//use App\Incident_portofolio;

class PemesananController extends Controller
{

    public function index()
    {
    	$data_portofolio = \App\Portofolio::all();
        //$data_clean = \App\Clean::all();
        //$data_incident = \App\Incident::all();
    	return view('pemesan.index',['data_portofolio' => $data_portofolio]);
    }

}