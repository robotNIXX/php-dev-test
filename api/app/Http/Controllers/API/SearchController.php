<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Http\Resources\Apartment;
use App\Services\ApartmentsService;

class SearchController extends Controller
{
    private ApartmentsService $apartmentsService;
    public function __construct(ApartmentsService $apartmentsService) {
        $this->apartmentsService = $apartmentsService;
    }
    public function search(SearchRequest $request) {
        $result = $this->apartmentsService->find($request->only(['name', 'bedrooms', 'bathrooms', 'storeys', 'garages']));

        return Apartment::collection($result);
    }
}