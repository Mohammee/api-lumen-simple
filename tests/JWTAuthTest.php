<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class JWTAuthTest extends TestCase
{
    protected $baseUrl = 'http://localhost:8000';

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/');

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }

    public function test_that_authentication_work()
    {

        $response = $this->post('/api/auth/me', [], ['authorization' => '']);
        $this->seeStatusCode(401);
    }

    public function test_the_login_authentication()
    {
        $this->assertNotFalse($this->getToken() , 'Cradentials data error');
    }

    public function test_refresh_token()
    {
        $headers = ['accept' => 'application/json', 'HTTP_Authorization' => "Bearer {$this->{'getToken'}()}"];
        $this->post('/api/auth/refresh' , [] , $headers);
        $this->seeStatusCode(200);
    }

    public function test_that_auth_return_me()
    {
        $headers = ['accept' => 'application/json', 'HTTP_Authorization' => "Bearer {$this->{'getToken'}()}"];
        $response = $this->post('/api/auth/me', [], $headers);
        $this->seeStatusCode(200);
        $this->seeJsonStructure(
            ["status" => [
                "success",
                "message",
                "code",
                "status_code",
            ],
                "user" => [
                    "id",
                    "name",
                    "email",
                    "email_verified_at",
                    "remember_token",
                    "created_at",
                    "updated_at",
                ]
            ]
        );
    }

    public function test_logout()
    {
        $user = \App\Models\User::first();
        $token = \Illuminate\Support\Facades\Auth::guard('api')->login($user);

        $headers = ['accept' => 'application/json' , 'authorization' => 'Bearer ' . $token];
         $this->post('/api/auth/logout' , [] , $headers);
         $this->seeStatusCode(200);
    }

    public function getToken()
    {
        return \Illuminate\Support\Facades\Auth::attempt(['email' => 'mohammad@gmail.com' , 'password' => 'password']);
    }
}
