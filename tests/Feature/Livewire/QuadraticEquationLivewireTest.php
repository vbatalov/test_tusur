<?php

namespace Tests\Feature\Livewire;

use App\Livewire\QuadraticEquation\QuadraticEquationLogViewer;
use App\Livewire\QuadraticEquation\QuadraticEquationSolve;
use Livewire\Livewire;
use Tests\TestCase;

class QuadraticEquationLivewireTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(QuadraticEquationSolve::class)
            ->assertStatus(200);

        $this->get("/")->assertSeeLivewire(QuadraticEquationSolve::class);

        Livewire::test(QuadraticEquationLogViewer::class)
            ->assertStatus(200);

        $this->get(route("quadratic-equation-log"))
            ->assertSeeLivewire(QuadraticEquationLogViewer::class);
    }

    public function test_successSolve()
    {
        Livewire::test(QuadraticEquationSolve::class, [
            "a" => 1,
            "b" => 1,
            "c" => 1,
        ])
            ->call("solve")
            ->assertSessionHas("_flash", function ($session) {
                return in_array("success", $session['new']);
            });
    }

    public function test_failedSolve()
    {
        Livewire::test(QuadraticEquationSolve::class, [
            "a" => 1,
            "b" => 1,
            "c" => 15,
        ])
            ->call("solve")
            ->assertSessionHas("_flash", function ($session) {
                return in_array("error", $session['new']);
            });
    }

    public function test_validateError()
    {
        Livewire::test(QuadraticEquationSolve::class, [
            "a" => 1,
            "b" => "a",
            "c" => 15,
        ])
            ->call("solve")
            ->assertSee("The b field must be an integer.");

        Livewire::test(QuadraticEquationSolve::class, [
            "b" => "a",
            "c" => 15,
        ])
            ->call("solve")
            ->assertSee([
                "The b field must be an integer.",
                "The a field is required."
            ]);
    }
}
