<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'skp';

    /**
     * Get all of the masterwp.
     */

    public function mpn()
    {
    	return $this->hasOne(Mpn::class, 'skssp', 'noskp');
    }

    public function masterwp()
    {
    	return $this->belongsTo(Masterwp::class, 'npwp');
    }
}
