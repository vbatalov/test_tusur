<?php
declare(strict_types=1);

namespace App\DTOs;

class QuadraticEquationData
{
    protected int $a;
    protected int $b;
    protected int $c;

    protected array $result;

    public function setA(int $a): QuadraticEquationData
    {
        $this->a = $a;
        return $this;
    }

    public function setB(int $b): QuadraticEquationData
    {
        $this->b = $b;
        return $this;
    }

    public function setC(int $c): QuadraticEquationData
    {
        $this->c = $c;
        return $this;
    }

    public function getA(): int
    {
        return $this->a;
    }

    public function getB(): int
    {
        return $this->b;
    }

    public function getC(): int
    {
        return $this->c;
    }

    public function setResult(array $result): QuadraticEquationData
    {
        $this->result = $result;
        return $this;
    }

    public function getResult(): array
    {
        return $this->result;
    }

}
