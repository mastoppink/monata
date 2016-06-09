<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kantor extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'kantor';

    /**
     * Get all of the masterwp.
     */

    public function pegawai()
    {
    	return $this->hasMany(Pegawai::class, 'kantor', 'kpp');
    }
}
