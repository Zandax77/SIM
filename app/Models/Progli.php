<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progli extends Model
{
    use HasFactory;
    protected $table = 'proglis';
    protected $fillable = ['jurusan','judul','link','dokumen'];
}
