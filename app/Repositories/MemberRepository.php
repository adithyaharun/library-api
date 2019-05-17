<?php

namespace App\Repositories;

use App\Member;

class MemberRepository extends Repository
{
    /**
     * Create new repository instance.
     *
     * @param Member $model
     */
    public function __construct(Member $model)
    {
        $this->model = $model;
    }
}
