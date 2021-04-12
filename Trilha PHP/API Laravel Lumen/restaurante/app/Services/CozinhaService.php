<?php

namespace App\Services;

use App\Models\ValidationCozinhas;
use App\Repositories\CozinhaRepositoryInterface;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class CozinhaService
{
    private $cozinhaRepository;

    public function __construct(CozinhaRepositoryInterface $cozinhaRepository)
    {
        $this->cozinhaRepository = $cozinhaRepository;
    }

    public function getAll(){

        try {
            $cozinhas = $this->cozinhaRepository->getAll();

            if (count ($cozinhas) > 0){
                return response()->json($cozinhas, Response::HTTP_OK);
            }
            else{
                return Response()->json([], Response::HTTP_OK);
            }
        }
        catch (QueryException $exception){
            return response()->json(['error' => 'Erro de conexão com o banco de dados'],
                Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    public function get($id){

        try {
            $cozinha = $this->cozinhaRepository->get($id);

            if($cozinha != null){
                return response()->json($cozinha, Response::HTTP_OK);
            }
            else{
                return response()->json("Cozinha não encontrada",
                    Response::HTTP_NOT_FOUND);
            }

        }
        catch (QueryException $exception){
            return response()->json(['error' => 'Erro de conexão com o banco de dados'],
                Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function store(Request $request){

        $validator = Validator::make(
            $request->all(),
            ValidationCozinhas::RULE_COZINHA
        );
        if ($validator->fails()){
            return response()->json($validator->errors(),
                Response::HTTP_BAD_REQUEST
            );
        }
        else{
            try {
                $cozinha = $this->cozinhaRepository->store($request);
                return response()->json($cozinha, Response::HTTP_CREATED);
            }
            catch (QueryException $exception){
                return response()->json(['error' => 'Erro de conexão com o banco de dados'],
                    Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }

    public function update($id, Request $request){

        $validator = Validator::make(
            $request->all(),
            ValidationCozinhas::RULE_COZINHA
        );
        if ($validator->fails()){
            return response()->json($validator->errors(),
                Response::HTTP_BAD_REQUEST
            );
        }
        else{
            try {
                $cozinha = $this->cozinhaRepository->update($id, $request);
                return response()->json($cozinha, Response::HTTP_OK);
            }
            catch (QueryException $exception){
                return response()->json(['error' => 'Erro de conexão com o banco de dados'],
                    Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }

    public function destroy($id){

        try {
            $this->cozinhaRepository->destroy($id);
            return response()->json("Cozinha deletada com sucesso", Response::HTTP_OK);
        }
        catch (QueryException $exception){
            return response()->json(['error' => 'Erro de conexão com o banco de dados'],
                Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}
