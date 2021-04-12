<?php

namespace App\Http\Controllers;

use App\Services\CozinhaService;
use Illuminate\Http\Request;


class CozinhasController extends Controller
{
    private $cozinhaService;

    public function __construct(CozinhaService $cozinhaService)
    {
        $this->cozinhaService = $cozinhaService;
    }

    public function getAll(){
        return $this->cozinhaService->getAll();
    }

    public function get($id){
        return $this->cozinhaService->get($id);
    }

    public function store(Request $request){
        return $this->cozinhaService->store($request);
    }

    public function update($id, Request $request){
        return $this->cozinhaService->update($id, $request);
    }

    public function destroy($id){
        return $this->cozinhaService->destroy($id);
    }
}
