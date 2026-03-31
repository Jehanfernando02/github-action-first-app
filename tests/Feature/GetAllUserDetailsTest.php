<?php

namespace Tests\Feature;

use Tests\TestCase;

class GetAllUserDetailsTest extends TestCase
{
    /** @test */
    public function test_get_all_user_details()
    {
        // Make GET request to the route
        $response = $this->getJson('/api/get-all-users');

        $response->assertStatus(200);

        // Dump the JSON response (for debugging)
//         dd($response->json());


    }
}
