<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{

	protected $table = 'portofolio';
    protected $fillable = ['kategori', 'foto', 'harga_awal', 'harga_deal', 'keterangan'];

	public function customer()
	{
		return $this->belongsToMany(Customer::class)->withPivot(['nama', 'alamat', 'nomor_wa'])->withTimeStamps();
	}

}
