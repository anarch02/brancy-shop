<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiProductTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testApiProducts(): void
    {
        $response = $this->get('/api/products');

        $response->assertStatus(200);
    }

    public function testApiProductDestroy(): void
    {
        $product = \App\Models\Product::factory()->create();

        $response = $this->postJson('/api/products/'.$product->id);

        $response->assertStatus(200);
    }

}
