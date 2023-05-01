<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RealEstateTest extends TestCase
{
    /**
     * Real estate index page (listing) should return 200
     * @return void
     */
    public function test_real_estate_index_return_200(): void
    {
        $response = $this->get(route('admin.realEstates.index'));

        $response->assertStatus(200);
    }
}
