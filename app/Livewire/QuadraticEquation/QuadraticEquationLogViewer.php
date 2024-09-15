<?php

namespace App\Livewire\QuadraticEquation;

use App\Models\QuadraticEquationLog;
use Illuminate\View\View;
use Livewire\Component;

class QuadraticEquationLogViewer extends Component
{
    public function render(): View
    {
        return view('livewire.quadratic-equation-log', [
            "data" => QuadraticEquationLog::orderBy("created_at", "desc")
                ->simplePaginate(5)
        ]);
    }
}
