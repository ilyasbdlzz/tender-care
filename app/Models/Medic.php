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
    protected $fillable = ['idmedis', 'iduser', 'spesialisasi', 'contact'];
    protected $table = 'tenagamedis';

    public function users()
    {
        return $this->belongsTo(User::class, 'iduser', 'id');
    }
}
