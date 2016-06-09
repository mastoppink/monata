<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterwp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'masterwp';

    /**
     * Get all of the masterwp.
     */

    public function profil()
    {
    	return $this->hasOne(Profilwp::class, 'npwp');
    }

    public function dokumen()
    {
    	return $this->hasOne(Profilwp::class, 'npwp');
    }

    public function status()
    {
    	return $this->belongsTo(Status::class, 'status');
    }

    public function klu()
    {
    	return $this->belongsTo(Klu::class, 'klu');
    }

    public function bentukhukum()
    {
    	return $this->belongsTo(Bentukhukum::class, 'bentukhukum');
    }

    public function jeniswp()
    {
    	return $this->belongsTo(Jeniswp::class, 'jeniswp');
    }

    public function pj()
    {
    	return $this->hasOne(Wppj::class, 'npwp');
    }

    public function js()
    {
    	return $this->hasOne(Wpjs::class, 'npwp');
    }

    public function skp()
    {
    	return $this->hasMany(Skp::class, 'npwp');
    }

    public function mpn()
    {
    	return $this->hasMany(Mpn::class, 'npwp');
    }

    public function pj()
    {
    	return $this->belongsTo(Pegawai::class, 'ip', 'pj');
    }

    public function js()
    {
    	return $this->belongsTo(Pegawai::class, 'ip', 'js');
    }

}
