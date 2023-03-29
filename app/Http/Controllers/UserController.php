<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @OA\Get(
     *     path="/user/index",
     *     summary="Retorna todos os usuários cadastrados se existirem",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     @OA\JsonContent(
     *       type="array",
     *       @OA\Items(
     *          @OA\Property(property="nome", type="string"),
     *          @OA\Property(property="cpf", type="string"),
     *          @OA\Property(property="data_nascimento", type="date"),
     *       )
     *     )
     *     ),
     * )
     */
    public function index()
    {
        return response()->json(User::all());
    }

    /**
     * @OA\Post(
     *     path="/user/create",
     *     summary="Adiciona um usuário ao sistema",
     *     @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="nome", type="string"),
     *              @OA\Property(property="cpf", type="string"),
     *              @OA\Property(property="data_nascimento", type="date"),
     *          ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="nome", type="string"),
     *              @OA\Property(property="cpf", type="string"),
     *              @OA\Property(property="data_nascimento", type="date"),
     *         )
     *     ),
     * )
     */
    public function create(Request $request)
    {
        return User::query()->create($request->all());
    }
}
