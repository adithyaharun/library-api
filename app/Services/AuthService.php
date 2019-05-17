<?php
namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    /**
     * Create new service instance.
     *
     * @param \App\Repositories\Repository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Login.
     */
    public function login($values)
    {
        if (empty($values['username'])) {
            throw new \Exception('Username is required.');
        }

        if (empty($values['password'])) {
            throw new \Exception('Password is required.');
        }

        // Get user.
        $user = $this->repository->user($values['username']);

        if (!Hash::check($values['password'], $user->password)) {
            // Password checking.
            throw new \Exception('Username or password is incorrect.');
        }

        // Generate new API key.
        $user->api_token = str_random(64);
        $user->save();

        return $user;
    }
}
