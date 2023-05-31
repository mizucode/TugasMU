<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    protected $fillable = [
        'user_id', 'NamaKegiatan', 'Deskripsi', 'TanggalMulai', 'TanggalSelesai',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
