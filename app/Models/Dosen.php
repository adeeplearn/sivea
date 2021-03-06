<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dosen extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'dosen';
    protected $fillable = ['nik','nama_dosen','jk','email','phone'];

    public function kritik(){
        return $this->hasOne(Kritik::class);
    }

}
