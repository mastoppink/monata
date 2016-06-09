<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mpn extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'mpn';

    /**
     * Get all of the masterwp.
     */

    public function kdmap()
    {
    	return $this->belongsTo(Kdmap::class, 'kdmap');
    }

    public function kjs()
    {
    	return $this->belongsTo(Kdmap::class, 'kjs');
    }

    public function skp()
    {
    	return $this->belongsTo(Skp::class, 'noskp', 'skssp');
    }

    public function stp()
    {
    	return $this->belongsTo(Stp::class, 'nostp', 'skssp');
    }

    public function masterwp()
    {
    	return $this->belongsTo(Masterwp::class, 'npwp');
    }
}
