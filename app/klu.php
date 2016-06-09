<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klu extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'klu';

    /**
     * Get all of the masterwp.
     */

    public function masterwp()
    {
    	return $this->hasMany(Masterwp::class, 'klu', 'kode');
    }
}
