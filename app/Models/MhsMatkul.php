<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MhsMatkul extends Model
{
    use HasFactory;
    protected $table = 'mhs_matkul';
    protected $fillable = [
        'mhs_id',
        'matkul_id',
    ];

    public function mahasiswa(){
        return $this->belongsTo(MahasiswaModel::class);
    }

    public function matkul(){
        return $this->belongsTo(MataKuliahModel::class);
    }
}
