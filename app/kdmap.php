<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kdmap extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'kdmap';

    /**
     * Get all of the masterwp.
     */

    public function mpn()
    {
    	return $this->hasMany(Mpn::class, 'kdmap');
    }
}
