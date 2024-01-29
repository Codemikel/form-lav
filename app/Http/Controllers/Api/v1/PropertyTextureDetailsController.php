<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\PropertyTextureDetails;
use Illuminate\Http\Request;

class PropertyTextureDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PropertyTextureDetails::create($request->all());

        return response()->json(['mensaje' => 'Detalles de textura de propiedad creados exitosamente'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(PropertyTextureDetails $propertyTextureDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PropertyTextureDetails $propertyTextureDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PropertyTextureDetails $propertyTextureDetails)
    {
        //
    }
}
