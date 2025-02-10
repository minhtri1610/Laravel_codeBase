<?php

namespace App\Models\Entities;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    
    public $timestamps = true;

    public $model_name = '';

    public $table = '';

    protected $primaryKey = '';     

    protected $fillable = [

    ];

    protected $casts = [

    ];
}
