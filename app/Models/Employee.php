<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'structure_id',
        'position',
        'name'
    ];


    public function structure()
    {
        return $this->belongsTo(Structure::class);
    }
}
