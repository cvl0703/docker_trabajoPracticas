<?php

namespace App\Http\Controllers;

use App\Http\Requests\consultasRequest;
use App\Models\modeloJson;
use Illuminate\Http\JsonResponse;
/**
 * Controller for handling post requests for consultations.
 */
class postController extends Controller
{
    /**
     * Handle the post request to create a new consultation to the API database.
     *
     * @param consultasRequest $request
     * @return JsonResponse
     */
    function postConsulta(consultasRequest $request):JsonResponse
    {
        $consultas = modeloJson::create($request->all());
        return response() ->json([
            'status' => 'success',
            'message' => 'Consulta creada con exito',
            'products' => $consultas
        ], 200);
    }
}
