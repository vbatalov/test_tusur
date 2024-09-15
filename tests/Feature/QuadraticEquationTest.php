<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuadraticEquationTest extends TestCase
{

    public function test_mainPage(): void
    {
        $response = $this->get(route("equation-quadratic-solve"));
        $response->assertOk();
    }

    public function test_logPage()
    {
        $response = $this->get(route("quadratic-equation-log"));
        $response->assertOk();
    }



}
