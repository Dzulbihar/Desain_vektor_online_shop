<?php


use Illuminate\Support\Facades\DB;
use App\Portofolio;
use App\Customer_portofolio;

function totalPortofolio()
{
    return Portofolio::count();
}


function totalCustomer()
{
    return Customer_portofolio::count();
}