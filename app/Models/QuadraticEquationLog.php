<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuadraticEquationLog extends Model
{
    protected $fillable = [
        "data",
        "result",
    ];

    protected $casts = [
        "data" => "array",
        "result" => "array"
    ];
}
