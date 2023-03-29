<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     description="API Simples Banco de Dados",
 *     version="1.0.0",
 *     title="Banco de dados UFS",
 * ),
 * @OA\Server(
 *     description="SwaggerHUB API Mocking",
 *     url="https://localhost:8000/api",
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
