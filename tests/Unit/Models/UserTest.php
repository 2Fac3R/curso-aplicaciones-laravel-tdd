<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_has_many_repositories()
    {
        $user = new User();
        // dd($user->repositories);
        $this->assertInstanceOf(Collection::class, $user->repositories);
    }
}
