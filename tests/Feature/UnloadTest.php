<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UnloadTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/unload');
        $response->assertDontSee('hacks', $escaped = true);
        $response->assertOk();
        $response->assertSee('March', $escaped = true);
        $response->assertSeeText('world', $escaped = true);
        $response->assertStatus(200);
    }
}
