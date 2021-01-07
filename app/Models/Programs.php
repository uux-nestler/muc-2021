<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    use HasFactory;
    protected $table = "programs";
    public $timestamps = false;
    protected $fillable = ['title', 'ort', 'date', 'zeit', 'content'];
}
