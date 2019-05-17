<?php

namespace App\Repositories;

use App\Category;

class CategoryRepository extends Repository
{
    /**
     * Create new repository instance.
     *
     * @param Category $model
     */
    public function __construct(Category $model)
    {
        $this->model = $model;
    }
}
