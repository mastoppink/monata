<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'jabatan';

    /**
     * Get all of the masterwp.
     */

    public function pegawai()
    {
    	return $this->hasMany(Pegawai::class, 'jabatan', 'kode');
    }
}
