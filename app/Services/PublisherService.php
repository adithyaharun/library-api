<?php
namespace App\Services;

use App\Repositories\PublisherRepository;

class PublisherService
{
    /**
     * Create new service instance.
     *
     * @param \App\Repositories\Repository $repository
     */
    public function __construct(PublisherRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get all data.
     */
    public function get($request)
    {
        // Query object.
        $query = $this->repository->model->select('*');

        if ($request->get('searchBy') !== null && $request->get('keyword') !== null) {
            $query->where($request->get('searchBy'), 'LIKE', "%{$request->get('keyword')}%");
        }

        // Paginate.
        return $query->paginate($request->get('perPage', 10));
    }

    /**
     * Get single data.
     */
    public function find($id)
    {
        return $this->repository->find($id);
    }

    /**
     * Store data.
     */
    public function store($request)
    {
        return $this->repository->create($request->only($this->repository->model->getFillable()));
    }

    /**
     * Update data.
     */
    public function update($request, $id)
    {
        return $this->repository->update($id, $request->only($this->repository->model->getFillable()));
    }

    /**
     * Delete data.
     */
    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}
