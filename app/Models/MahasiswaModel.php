<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    // protected $primarykey = 'id';
    // protected $keyType = 'int';
    protected $fillable = [
        'nim',
        'nama',
        'foto',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'tanggal_lahir',
        'hp',
        'alamat',
    ];

    public function kelas(){
        return $this->belongsTo(KelasModel::class);
    }

    public function mhs_matkul(){
        return $this->hasMany(MhsMatkul::class);
    }
}
