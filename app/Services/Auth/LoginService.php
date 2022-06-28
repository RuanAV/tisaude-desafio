<?php

namespace App\Services\Auth;

class LoginService
{
    public function execute(array $credentials): array
    {
        if (!$token = auth()->attempt($credentials))
            throw new \Exception('Not authorized', 401);
        

            return [
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => auth()->user(),
            ];
    }
}


?>