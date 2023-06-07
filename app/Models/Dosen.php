<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'new_dosen';
    protected $primaryKey = 'id';
    protected $fillable = ['nip', 'nama', 'fakultas'];
    public $timestamps = false;
}
