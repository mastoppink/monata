<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seksi extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'seksi';

    /**
     * Get all of the masterwp.
     */

    public function pegawai()
    {
    	return $this->hasMany(Pegawai::class, 'seksi', 'kode');
    }
}
