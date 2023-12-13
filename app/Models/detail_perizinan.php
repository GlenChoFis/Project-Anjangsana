<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_perizinan extends Model
{
    use HasFactory;

    protected $table = 'detail_perizinan';

    protected $fillable= [
        'id_perizinan',
        'id_gunung',
        'total_harga'

    ];

    public $created_at = false;
    public $updated_at = false;

    public function Perizinan(){
        return $this->belongsTo(Perizinan::class, 'id_perizinan');
    }

    public function Gunung(){
        return $this->belongsTo(Gunung::class, 'id_gunung');
    }
}
