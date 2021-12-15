<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoinPenilaian extends Model
{
    use HasFactory;

    protected $table = 'poin_penilaian';

    protected $fillable = ['deskripsi', 'pertanyaan'];

    public function kriteria(){
        return $this->belongsTo(Kriteria::class);
    }
}
