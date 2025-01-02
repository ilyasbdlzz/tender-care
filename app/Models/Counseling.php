<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counseling extends Model
{
    //
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'iduser',
        'medis_id',
        'status',
        'date',
        'clock'
    ];
    protected $table = 'counseling';

    public function medic()
    {
        return $this->belongsTo(Medic::class, 'medis_id', 'idmedis');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'iduser', 'id');
    }
}
