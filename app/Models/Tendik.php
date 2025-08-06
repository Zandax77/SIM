<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tendik extends Model
{
    use HasFactory;
    protected $fillable = ['nip','nama','lahir','jkel','status','pendidikan','agama','alamat','foto'];
}
