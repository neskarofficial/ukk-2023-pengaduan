<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    protected $table = 'tanggapans';
    protected $fillable = [
      'pengaduans_id',
      'users_id',
      'tgl_tanggapan',
      'tanggapan',
    ];

    public function pengaduan()
    {
        return $this->belongsTo('App\Models\Pengaduan','id','pengaduans_Id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User','id'.'users_Id');
    }    
}