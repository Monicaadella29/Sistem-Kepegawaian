<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'jenis_cuti', 'golongan', 'start_date', 'end_date', 'keterangan', 'file_path', 'file_name', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
