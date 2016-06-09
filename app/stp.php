<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'stp';

    /**
     * Get all of the masterwp.
     */

    public function mpn()
    {
    	return $this->hasOne(Mpn::class, 'skssp', 'nostp');
    }
}
