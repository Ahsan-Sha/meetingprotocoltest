<?php

namespace App\Http\Controllers;

use App\Http\Requests\BicycleStoreRequest;
use App\Models\Bicycle;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BicycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bicycles =  Bicycle::all();
        return Inertia::render('Bicycle/Index', compact('bicycles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return Inertia::render('Bicycle/Create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BicycleStoreRequest $request)
    {
        //
        try {
            Bicycle::create($request->validated());
            return redirect()->route('bicycles.index')->with('message', 'Bicycle Created Successfully!');

       } catch (\Exception $e) {

            return redirect()->back()->with('message', 'Something wents wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bicycle  $bicycle
     * @return \Illuminate\Http\Response
     */
    public function show(Bicycle $bicycle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bicycle  $bicycle
     * @return \Illuminate\Http\Response
     */
    public function edit(Bicycle $bicycle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bicycle  $bicycle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bicycle $bicycle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bicycle  $bicycle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bicycle $bicycle)
    {
        //
    }
}
