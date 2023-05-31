<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_if_get_count_returns_successfully()
    {
        $response =  $response = $this->get('/api/getCount')
            ->assertStatus(200);

        $this->assertIsObject(
            $response
        );
    }
}
