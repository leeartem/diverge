<?php

namespace App\Http\Controllers;

use App\Http\Requests\PriceRequest;

class PriceController extends Controller
{
    public function store(PriceRequest $request)
    {
        $data = $request->validated();

        return $data;
    }
}
