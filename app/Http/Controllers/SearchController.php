<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
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
        $search = $input->q;
        $this_user_id = Auth::id();

        $products = Product::leftJoin('favorites', 'products.id', '=', 'favorites.fav_product_id')

            ->where('favorites.user_id', '=', $this_user_id)
            ->orWhere('favorites.fav_product_id', '=', null)
            ->where('name', 'LIKE', '%' . $search . '%')
            ->orderBy('products.created_at', 'desc')
            ->get();

        return view('caritanah.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
    }

    // store product to favorite
    public function store(Request $request)
    {
        $user = Auth::id();

        Favorite::create($request->all());

        return redirect()->route('caritanah.index')
            ->with('success', 'Product added successfully to favorite list.');
    }


    public function show(Product $product, $id)
    {
        $this_user_id = Auth::id();

        // send data to view
        $product = Product::where('id', $id)->first();
        $is_favorite = Favorite::where([['user_id', $this_user_id], ['fav_product_id', $id]])->first();

        return view('caritanah.show', compact('product', 'is_favorite'));
    }

    // remove product from favorite
    public function destroy($id)
    {
        Favorite::where('product_id', $id)->delete();

        return redirect()->route('caritanah.index')->with('success', 'Product removed successfully from favorite.');
    }
}
