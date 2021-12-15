<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asisten extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'asisten';
    protected $fillable = ['nim','nama_asisten','phone'];

}
