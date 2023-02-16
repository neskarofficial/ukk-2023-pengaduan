<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduans';
    protected $fillable = [
     'users_id',
     'tgl_pengaduan',
     'isi_laporan',
     'foto',
     'status'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','users_id','id');
    }

    public function tanggapan()
    {
        return $this->hasMany('App\Models\Tanggapan');
    }
    
    

}