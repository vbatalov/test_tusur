<?php
declare(strict_types=1);

namespace App\Livewire\QuadraticEquation;

use App\Actions\QuadraticEquation\Solve\SolveQuadraticEquationAction;
use App\DTOs\QuadraticEquationData;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class QuadraticEquationSolve extends Component
{
    #[Validate("required|int")]
    public $a;
    #[Validate("required|int")]
    public $b;
    #[Validate("required|int")]
    public $c;
    /**
     * @var float[]|int[]
     */
    public array $result;
    private SolveQuadraticEquationAction $action;

    public function __construct()
    {
        $this->action = new SolveQuadraticEquationAction();
    }

    public function render(): View
    {
        return view('livewire.solve-quadratic-equation');
    }

    public function solve(): void
    {
        $this->validate();

        $data = new QuadraticEquationData();
        $data->setA(intval($this->a))
            ->setB(intval($this->b))
            ->setC(intval($this->c));

        try {
            $this->result = $this->action->setData($data)->handle();
            session()->flash("success");
        } catch (\Exception $e) {
            session()->flash("error", $e->getMessage());
        }

    }
}
