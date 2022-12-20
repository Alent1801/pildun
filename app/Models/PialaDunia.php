<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PialaDunia extends Model
{
    use HasFactory;

    protected $table = 'piala_dunia';
    protected $fillable = ['negara_penyelenggara', 'tahun_diselenggarakan'];
}