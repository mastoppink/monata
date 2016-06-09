<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profilwp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'profilwp';

    /**
     * Get all of the masterwp.
     */

    public function masterwp()
    {
    	return $this->belongsTo(Masterwp::class, 'npwp');
    }
}
