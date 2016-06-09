<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statuswp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'statuswp';

    /**
     * Get all of the masterwp.
     */

    public function masterwp()
    {
    	return $this->hasMany(Masterwp::class, 'status', 'kode');
    }
}
