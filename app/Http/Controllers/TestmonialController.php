<?php

namespace App\Http\Controllers;

use App\Models\Testmonial;
use App\Http\Requests\StoreTestmonialRequest;
use App\Http\Requests\UpdateTestmonialRequest;

class TestmonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testmonials = Testmonial::all();
        return view('admin.testmonials.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testmonials.create') ; 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestmonialRequest $request)
    {
        $data = $request->validated();
       Testmonial::create($data);
        return to_route('admin.testmonials.create')->with('add_testmonial_status','testmonial added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testmonial $testmonial)
    {
        return view('admin.testmonials.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testmonial $testmonial)
    {
        return view('admin.testmonials.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestmonialRequest $request, Testmonial $testmonial)
    {
        $data = $request->validated();
        $testmonial->update($data);
        return to_route('admin.ctestmonials.index')->with('update_testmonial_status','testmonial list updated successfuly') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testmonial $testmonial)
    {
        $testmonial->delete();
        return to_route('admin.testmonials.index')->with('delete_testmonial_status','testmonial has been deleted successfuly');
    }
}
