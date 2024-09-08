<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function testSuccessfulAuthentication()
    {
        // Создаем тестового пользователя в базе данных
        $user = User::factory()->create([
            'username' => 'test_user',
            'password' => Hash::make('test_password'),
        ]);

        // Выполняем запрос на аутентификацию с корректными данными
        $response = $this->post('/login/check', [
            'username' => 'test_user',
            'password' => 'test_password',
        ]);

        // Проверяем, что пользователь был успешно аутентифицирован и перенаправлен
        $response->assertRedirect('/');
        $this->assertAuthenticatedAs($user);
    }
}
