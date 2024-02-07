<?php

namespace App\Http\Controllers;

use App\Facades\FeedbackFacade;
use App\Http\Requests\FeedbackRequest;

class FeedbackController extends Controller
{
    public function create(FeedbackRequest $request): \Illuminate\Http\JsonResponse
    {
        if (FeedbackFacade::create($request->validated())) {
            return response()->json([
                'success' => true,
            ]);
        }

        return response()->json([
            'success' => false,
        ]);
    }
}
