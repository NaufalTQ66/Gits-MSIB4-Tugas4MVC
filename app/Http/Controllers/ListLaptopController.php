<?php

namespace App\Http\Controllers;

use App\Models\ListLaptop;
use App\Http\Requests\StoreListLaptopRequest;
use App\Http\Requests\UpdateListLaptopRequest;

class ListLaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laptops = ListLaptop::all();
        return view('posts', compact('laptops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreListLaptopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListLaptopRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListLaptop  $listLaptop
     * @return \Illuminate\Http\Response
     */
    public function show(ListLaptop $listLaptop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListLaptop  $listLaptop
     * @return \Illuminate\Http\Response
     */
    public function edit(ListLaptop $listLaptop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateListLaptopRequest  $request
     * @param  \App\Models\ListLaptop  $listLaptop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateListLaptopRequest $request, ListLaptop $listLaptop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListLaptop  $listLaptop
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListLaptop $listLaptop)
    {
        //
    }
}
