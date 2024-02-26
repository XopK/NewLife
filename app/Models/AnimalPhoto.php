<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalPhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_animal',
        'photo',
    ];

    public function animals()
    {
        return $this->belongsTo(Animal::class, 'id_animal');
    }
}
