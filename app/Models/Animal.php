<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'contactNumber',
        'email',
        'animalType',
        'additionalInfo',
        'claim',
        'district',
        'id_user',
    ];

    public function photos()
    {
        return $this->hasMany(AnimalPhoto::class, 'id_animal');
    }
}
