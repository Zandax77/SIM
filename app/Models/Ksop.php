<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ksop extends Model
{
    use HasFactory;
    protected $table = 'kspos';
    protected $fillable = ['judul','link','dokumen','keterangan'];
}
