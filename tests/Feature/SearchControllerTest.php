<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_home_page_loads()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    public function log_the_data(){
      
    }
}
