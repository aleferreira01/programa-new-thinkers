<?php

namespace App\Repositories;

use App\Models\Cozinhas;
use App\Repositories\CozinhaRepositoryInterface;
use Illuminate\Http\Request;

class CozinhaRepositoryEloquent implements CozinhaRepositoryInterface
{
    private $model;

    public function __construct(Cozinhas $cozinhas){
        $this->model = $cozinhas;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function get($id)
    {
        return $this->model->find($id);
    }

    public function store(Request $request)
    {
        return $this->model->create($request->all());
    }

    public function update($id, Request $request)
    {
        $cozinha = $this->model->find($id);
        $cozinha->update($request->all());
        return $cozinha;
    }

    public function destroy($id)
    {
        return $this->model->find($id)
            ->delete();
    }
}
