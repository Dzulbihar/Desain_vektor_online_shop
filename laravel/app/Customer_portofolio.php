<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_portofolio extends Model
{

	protected $table = 'customer_portofolio';
    protected $fillable = ['portofolio_id','customer_id','nama','alamat','nomor_wa'];

}
