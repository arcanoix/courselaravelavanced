<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUserTest extends TestCase
{
    /** @test */

    function it_welcomes_users_with_nickname()
    {
            $this->get('/saludo/gustavo/thavoo')
            ->assertStatus(200)
            ->assertSee('Bienvenido Gustavo, tu apodo es thavoo');
    }


    /**@test */

    function it_welcomes_users_without_nickname()
    {
        $this->get('/saludo/gustavo/thavoo')
        ->assertStatus(200)
        ->assertSee('Bienvenido Gustavo');
    }
}
