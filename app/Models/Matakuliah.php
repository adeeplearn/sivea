<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliah';

    protected $fillable = ['nama_matakuliah', 'sks', 'alias'];

    public function prodi(){
        return $this->belongsTo(Prodi::class);
    }

}
