<?php
declare(strict_types=1);

namespace App\Actions\QuadraticEquation\Solve;

use App\Actions\QuadraticEquation\Log\QuadraticEquationLogCreator;
use App\DTOs\QuadraticEquationData;
use Exception;

class SolveQuadraticEquationAction
{
    private QuadraticEquationData $data;

    /**
     * @throws Exception
     */
    public function handle(): array
    {
        $a = $this->data->getA();
        $b = $this->data->getB();
        $c = $this->data->getC();

        // Вычисление дискриминанта
        $discriminant = pow($b, 2) - ($a * $c);

        if ($discriminant > 0) {
            $x1 = (-$b + sqrt($discriminant)) / ($a * 2);
            $x2 = (-$b - sqrt($discriminant)) / ($a * 2);

            $this->data->setResult([
                "x1" => $x1,
                "x2" => $x2
            ]);

        } elseif ($discriminant == 0) {
            $x = -($b / ($a * 2));

            $this->data->setResult([
                "x1" => $x
            ]);
        } else {
            throw new Exception("Уравнение не имеет действительных решений.");
        }

        $this->saveLog();

        return $this->data->getResult();
    }

    public function setData(QuadraticEquationData $data): SolveQuadraticEquationAction
    {
        $this->data = $data;
        return $this;
    }

    private function saveLog(): void
    {
        QuadraticEquationLogCreator::create(data: $this->data);
    }
}
