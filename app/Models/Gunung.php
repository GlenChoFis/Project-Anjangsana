<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gunung extends Model
{
    use HasFactory;

    protected $table='gunung';
    protected $primaryKey = 'id_gunung';

    public $created_at = false;
    public $updated_at = false;

    public function detail_perizinan()
    {
        return $this->hasMany(detail_perizinan::class, 'id_gunung');
    }
}

