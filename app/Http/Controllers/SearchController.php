<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $input)
    {
        // $search = $input->q;
        // $this_user_id = Auth::id();
    
        // $products = Product::leftJoin('favorites','products.id','=','favorites.fav_product_id')
   
        // ->where('favorites.user_id', '=', $this_user_id)
        // ->orWhere('favorites.fav_product_id', '=', null)
        // ->where('name', 'LIKE', '%'.$search.'%')
        // ->orderBy('products.created_at', 'desc')
        // ->get();
    
        // return view('caritanah.index',compact('products'))
        //     ->with('i', (request()->input('page', 1) - 1) * 6);
        return view('caritanah.index');

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
}
