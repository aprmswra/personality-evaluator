<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Candidate extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'candidates'; 
    protected $guarded = [];
    // public $primaryKey = 'id';
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'address',
        'date_of_birth',
        'no_hp',
        'position',
        'status',
        'tell_me_yourself',
        'test_score',
        'test_result',
        'personality'
    ];
}
