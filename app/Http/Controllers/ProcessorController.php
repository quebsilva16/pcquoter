<?php

namespace App\Http\Controllers;

use App\Models\Processor;
use Illuminate\Http\Request;

class ProcessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $processors = Processor::all();
        return response()->json($processors);
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
        $processor = Processor::create($request->post()); 
        return response()->json(['processor'=> $processor]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Processor $processor)
    {
        return response()->json($processor);
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
    public function update(Request $request, Processor $processor)
    {
        $processor->fill($request->post())->save();
        return response()->json(['processor'=>$processor]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Processor $processor)
    {
        $processor->delete();
        return response()->json([
            'menssage'=>'Processor eliminated'
        ]);
    }
}
