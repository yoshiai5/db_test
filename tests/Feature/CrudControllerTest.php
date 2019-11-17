<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CrudControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    // public function aboutIndex()
    public function testIndex()
    {
        // dd($this->get('/cruds/index'));
        $response = $this->get('/cruds');
            // 下記でも同じ書き方
            // $response = $this->get(route('cruds.index'));
        $response->assertStatus(200)
            ->assertViewIs('cruds.index')
            ->assertSee('index');
    }
}
