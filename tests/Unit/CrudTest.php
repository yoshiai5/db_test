<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Crud;

class CrudTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $this->assertTrue(true);
    // }

    public function testIsNotGetメソッドのcheck()
    {
        $cruds = Crud::isNotGet();

        foreach ($cruds as $crud) {
            $this->assertSame(1, $crud->is_not_get);
        }
    }
}
