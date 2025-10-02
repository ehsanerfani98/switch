<?php

namespace App\Http\Controllers;

use App\Models\CarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function save_sell_request(Request $request)
    {
        $data = $request->except('_token');
        $car_request = new CarRequest();
        $car_request->user_id = Auth::id();
        $car_request->type = 'sell';
        $car_request->data = $data;
        $car_request->save();
    }
}
