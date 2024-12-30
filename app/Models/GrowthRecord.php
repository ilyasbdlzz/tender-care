<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrowthRecord extends Model
{
    //
    use HasFactory;
    protected $fillable = ['iduser', 'height', 'weight', 'date'];
}
