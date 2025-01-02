<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medic extends Model
{
    /** @use HasFactory<\Database\Factories\MedicFactory> */
    use HasFactory;
    protected $primaryKey = 'idmedis';
    public $incrementing = false;
    protected $fillable = ['idmedis', 'name', 'spesialisasi', 'contact'];
    protected $table = 'tenagamedis';
}
