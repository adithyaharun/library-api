<?php
namespace App\Services;

use App\Repositories\MemberRepository;

class MemberService
{
    /**
     * Create new service instance.
     *
     * @param \App\Repositories\Repository $repository
     */
    public function __construct(MemberRepository $repository)
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

    /**
     * Member code generator.
     */
    public function code()
    {
        $year = date('Y');
        $month = date('m');
        $memberCount = $this->repository
            ->model
            ->selectRaw('COUNT(id) AS count')
            ->whereRaw("YEAR(created_at) = {$year}")
            ->whereRaw("MONTH(created_at) = {$month}")
            ->first()
            ->count;

        return "M{$year}{$month}" . str_pad($memberCount + 1, 4, '0', STR_PAD_LEFT);
    }
}
