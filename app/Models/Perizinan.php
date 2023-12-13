<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perizinan extends Model
{
    use HasFactory;

    protected $table = 'perizinan';
    protected $primaryKey = 'id_perizinan';
    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'alamat_tinggal',
        'nomor_telepon',
        'nomor_telepon_keluarga',
        'tanggal_pendakian',
        'image_ktp',
        'image_sks'
    ];

    public $created_at = false;
    public $updated_at = false;

    public function Users(){
        return $this->belongsTo(Users::class, 'id'); 
    }

    public function detail_perizinan(){
        return $this->hasMany(detail_perizinan::class, 'id_perizinan');
    }

}

