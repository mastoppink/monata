<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jeniswp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'jeniswp';

    /**
     * Get all of the masterwp.
     */

    public function masterwp()
    {
    	return $this->hasMany(Masterwp::class, 'jeniswp', 'kode');
    }
}
