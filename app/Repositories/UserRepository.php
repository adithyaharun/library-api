<?php

namespace App\Repositories;

use App\User;

class UserRepository extends Repository
{
    /**
     * Create new repository instance.
     *
     * @param User $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * Get user.
     *
     * @param  mixed  $username
     * @return mixed
     */
    public function user($username)
    {
        $user = $this->model->where('username', $username)
            ->orWhere('email', $username)
            ->first();

        if ($user == null) {
            throw new \Exception('Username or password is incorrect.');
        }

        return $user;
    }
}
