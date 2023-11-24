<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'student_id',
        'name',
        'class',
        'birth_year',
        'gender',
        'address',
        'phone_number',
    ];

    protected $primaryKey = 'student_id';

    protected $keyType = 'string';
}
