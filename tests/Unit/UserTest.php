<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_user_can_generate_default_image_when_no_email_found(): void
    {
        $user = User::factory()->create([
            'name' => 'Andre',
            'email' => 'afakeemail@fakeemail.com',
        ]);

        $gravatarUrl = $user->getAvatar();

        $this->assertEquals(
            'https://www.gravatar.com/avatar/' . md5($user->email) . '?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-1.png',
            $gravatarUrl
        );

        $response = Http::get($user->getAvatar());

        $this->assertTrue($response->successful());
    }

    public function test_user_can_generate_gravatar_defualt_image_when_no_email_found_first_character_z()
    {
        $user = User::factory()->create([
            'name' => 'Andre',
            'email' => 'zfakeemail@fakeemail.com',
        ]);

        $gravatarUrl = $user->getAvatar();

        $this->assertEquals(
            'https://www.gravatar.com/avatar/' . md5($user->email) . '?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-26.png',
            $gravatarUrl
        );

        $response = Http::get($user->getAvatar());

        $this->assertTrue($response->successful());
    }

    /** @test */
    public function can_check_if_user_is_an_admin()
    {
        $user = User::factory()->make([
            'name' => 'Andre',
            'email' => 'andre_madarang@hotmail.com',
        ]);

        $userB = User::factory()->make([
            'name' => 'Andre',
            'email' => 'user@user.com',
        ]);

        $userC = User::factory()->make([
            'name' => 'Kim Namjoon',
            'email' => 'ruthiejay022@gmail.com',
        ]);

        $this->assertTrue($userC->isAdmin());
        $this->assertFalse($user->isAdmin());
        $this->assertFalse($userB->isAdmin());
    }
}
