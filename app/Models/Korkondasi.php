<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korkondasi extends Model
{
    use HasFactory;
    protected $table = 'korkondasis';
    protected $fillable = ['title', 'kolokasi', 'url'];
}
