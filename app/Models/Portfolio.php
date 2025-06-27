<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika sama dengan nama model jamak)
    protected $table = 'portfolios';

    // Field yang boleh diisi (mass assignment)
    protected $fillable = [
        'nama',
        'deskripsi',
    ];
}


