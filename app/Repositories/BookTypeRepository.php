<?php

namespace App\Repositories;

use App\BookType;

class BookTypeRepository extends Repository
{
    /**
     * Create new repository instance.
     *
     * @param BookType $model
     */
    public function __construct(BookType $model)
    {
        $this->model = $model;
    }
}
