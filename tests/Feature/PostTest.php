<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_post_can_be_created(): void
    {
        $response = $this->post('/posts', [
            'title' => 'My first post',
            'content' => 'This is a long enough content for validation.',
        ]);

        $response->assertRedirect('/posts');
        $this->assertDatabaseHas('posts', [
            'title' => 'My first post',
        ]);
    }
}
