<?php

namespace App\Repositories;

use App\Publisher;

class PublisherRepository extends Repository
{
    /**
     * Create new repository instance.
     *
     * @param Publisher $model
     */
    public function __construct(Publisher $model)
    {
        $this->model = $model;
    }
}
