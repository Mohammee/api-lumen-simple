<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;

class AuthController extends Controller
{
    /**
     * @var AuthRequest
     */
    private $validator;

    public function __construct(AuthRequest $request)
    {
        $this->middleware('auth:api', ['except' => ['login']]);
        $this->validator = $request;
    }

    public function login()
    {
        $this->validate(request() , $this->validator->rules());
        $credentials = request(['email', 'password']);

        if (!$token = Auth::guard('api')->attempt($credentials)) {
           throw new UnauthorizedException();
        }

        return $this->responseWithToken($token);
    }

    public function me()
    {
        return $this->apiResponse(Auth::guard('api')->user(), 'user');
    }

    public function refresh()
    {
        return $this->responseWithToken(Auth::guard('api')->refresh());
    }

    public function logout()
    {
        Auth::guard('api')->logout();
        return $this->responseWithMessage('Successfully Logged out');
    }

    /**
     * @param $token
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expire_in' => Auth::guard('api')->factory()->getTTL() * 60
        ]);
    }

}
