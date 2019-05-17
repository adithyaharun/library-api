<?php

namespace App\Repositories;

class Repository
{
    /**
     * @var mixed
     */
    public $model;

    /**
     * Get all model.
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Get single model.
     *
     * @param mixed $id
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * Create new model.
     *
     * @param mixed $id
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * Update a model.
     *
     * @param mixed $id
     * @param array $attributes
     */
    public function update($id, array $attributes)
    {
        $model = $this->model->find($id);
        $model->update($attributes);

        return $model;
    }

    /**
     * Delete a model.
     *
     * @param mixed $id
     */
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }

    /**
     * Return Eloquent instance.
     *
     * @param mixed $id
     */
    public function model()
    {
        return $this->model;
    }
}
