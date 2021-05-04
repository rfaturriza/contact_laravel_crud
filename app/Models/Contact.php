<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'people';

    protected $fillable = [
        'firstname',
        'lastname',
        'address',
        'phone_number',
        'date_of_birth',
        'gender',
        'photo',
    ];
}
