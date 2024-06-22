<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kinerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'tahun', 'nip', 'nama', 'unit_kerja', 'tgl', 'jabatan', 'hasil', 'instansi', 'perilaku', 'kuadran', 'penilai_jabatan', 'penilai', 'status',
    ];

    public function files()
    {
        return $this->hasMany(KinerjaFile::class);
    }
}

class KinerjaFile extends Model
{
    use HasFactory;

    protected $fillable = ['kinerja_id', 'file_path', 'file_name'];

    public function kinerja()
    {
        return $this->belongsTo(Kinerja::class);
    }
}