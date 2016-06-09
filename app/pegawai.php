<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'pegawai';

    /**
     * Get all of the masterwp.
     */

    public function kantor()
    {
    	return $this->belongsTo(Kantor::class, 'kpp', 'kantor');
    }

    public function jabatan()
    {
    	return $this->belongsTo(Jabatan::class, 'kode', 'jabatan');
    }

    public function seksi()
    {
    	return $this->belongsTo(Seksi::class, 'kode', 'seksi');
    }

   	public function wppj()
    {
    	return $this->hasMany(Masterwp::class, 'pj', 'ip');
    }

    public function wpjs()
    {
    	return $this->hasMany(Masterwp::class, 'js', 'ip');
    }
}
