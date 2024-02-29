<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'contactNumber',
        'email',
        'animalType',
        'additionalInfo',
        'claim',
        'status',
        'find_date',
        'district',
        'id_user',
    ];

    public function photos()
    {
        return $this->hasMany(AnimalPhoto::class, 'id_animal');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
