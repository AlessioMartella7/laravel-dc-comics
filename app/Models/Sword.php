<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sword extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'weight', 'image', 'length', 'material', 'type'
    ];
    }
