<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Products = Products::all();
        return view('Pages.index',compact('Products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Products::create($request->all());
        return redirect()->route('Pages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Products = Products::find($id);
        return view('Pages.show',compact('Products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Products = Products::find($id);
        return view('Pages.edit',compact('Products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $Products = Products::find($id);
        $Products->update($request->all());
        return redirect()->route('Pages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $Products = Products::find($id);
        $Products->delete();
        return redirect()->route('Pages.index');
    }
}
