<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table ='siswa';
    protected $fillable = ['nama_peserta_didik','tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama_id', 'alamat', 'nomor_telepon'];
    public function agama()
    {
        return $this->belongsTo('App\Agama');
    }
}
