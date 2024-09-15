<?php

namespace App\Actions\QuadraticEquation\Log;

use App\DTOs\QuadraticEquationData;
use App\Models\QuadraticEquationLog;

class QuadraticEquationLogCreator
{
    public static function create(QuadraticEquationData $data): void
    {
        QuadraticEquationLog::create([
            "data" => [
                "a" => $data->getA(),
                "b" => $data->getB(),
                "c" => $data->getC(),
            ],
            "result" => $data->getResult()
        ]);
    }
}
