<?php

namespace Tests\Feature;

use Tests\TestCase;
<<<<<<< HEAD
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> 1e7b2651de78a175a21a2a2ba25fc95e988905ee

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
