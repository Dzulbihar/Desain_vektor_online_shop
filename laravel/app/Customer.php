<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

	protected $table = 'customer';
    protected $fillable = ['pesan'];

	public function portofolio()
	{
		return $this->belongsToMany(Portofolio::class)->withPivot(['nama', 'alamat', 'nomor_wa'])->withTimeStamps();
	}

}
