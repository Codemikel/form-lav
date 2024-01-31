<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\PropertyVisualDetails;
use Illuminate\Http\Request;

class PropertyVisualDetailsController extends Controller
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
        PropertyVisualDetails::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(PropertyVisualDetails $propertyVisualDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PropertyVisualDetails $propertyVisualDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PropertyVisualDetails $propertyVisualDetails)
    {
        //
    }
}
