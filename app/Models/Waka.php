<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waka extends Model
{
    use HasFactory;
    protected $fillable = ['bagian','judul','link','dokumen','keterangan'];
}
