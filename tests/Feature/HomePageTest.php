<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_it_loads_the_landing_page_at_root_and_uses_pages_home_view(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertViewIs('Pages.home');
        $response->assertSee('Welcome to');
    }
}
