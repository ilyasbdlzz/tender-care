<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthRecord extends Model
{
    //
    use HasFactory;
    protected $fillable = ['iduser', 'drug', 'allergy', 'date'];

    public function users()
    {
        return $this->belongsTo(User::class, 'iduser', 'id');
    }
}
