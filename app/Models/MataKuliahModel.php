<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliahModel extends Model
{
    use HasFactory;

    protected $table = 'matkul';

    public function mhs_matkul(){
        return $this->hasMany(MhsMatkul::class);
    }
}
