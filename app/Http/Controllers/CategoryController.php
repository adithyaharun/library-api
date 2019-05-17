<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }

    /**
     * Get data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $this->service->get($request);
    }

    /**
     * Store data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->service->store($request);
    }

    /**
     * Update data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed                     $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->service->update($request, $id);
    }

    /**
     * Delete data.
     *
     * @param  mixed  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $this->service->delete($id);

        return [
            'error' => false,
            'message' => 'Kategori berhasil dihapus.'
        ];
    }
}
