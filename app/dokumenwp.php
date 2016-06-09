<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumenwp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'dokumenwp';

    /**
     * Get all of the masterwp.
     */

    public function masterwp()
    {
    	return $this->belongsTo(Masterwp::class, 'npwp');
    }


}
