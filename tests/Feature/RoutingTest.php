<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoutingTest extends TestCase
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

    public function testUserSignUpTest()
    {
        $response = $this->get('/user/signup');

        $response->assertStatus(200);
    }

    public function testUserSignInTest()
    {
        $response = $this->get('/user/signin');

        $response->assertStatus(200);
    }

    public function testBorrowStorage()
    {
        $response = $this->get(route('library.borrowstorage'));

        $response->assertStatus(200);
    }

    public function testRemoveFromBorrow()
    {
        $response = $this->get('remove-from-borrow/{id}');

        $response->assertStatus(200);
    }
}
