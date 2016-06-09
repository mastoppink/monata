<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bentukhukum extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'bentukhukum';

    /**
     * Get all of the masterwp.
     */

    public function masterwp()
    {
    	return $this->hasMany(Masterwp::class, 'bentukhukum', 'kode');
    }
}
