<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavoriteController extends Controller
{
    public function index()
    {


        $this_user_id = Auth::id();


        $products = DB::table('products')
            ->join('favorites', function ($builder) {
                $builder->on('favorites.fav_product_id', '=', 'products.id');
                // here you can add more conditions on tags table.
            })
            ->where('user_id', $this_user_id)
            ->orderByDesc('favorites.created_at')
            ->paginate(6);

        return view('myfavorites.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this_user_id = Auth::id();

        Favorite::create([
            'user_id'    => $this_user_id,
            'fav_product_id' => $request->product_id
        ]);

        // return redirect()->route('myfavorites.index')
        //                 ->with('success','Product added successfully to favorite list.');
        return back()->with('success', 'Product added successfully to favorite list.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, $id)
    {
        $this_user_id = Auth::id();

        $product = Product::where('id', $id)->first();
        $is_favorite = Favorite::where([['user_id', $this_user_id], ['fav_product_id', $id]])->first();

        return view('myfavorites.show', compact('product', 'is_favorite'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this_user_id = Auth::id();
        Favorite::where('user_id', $this_user_id)->where('fav_product_id', $id)->delete();
        return back()->with('success', 'Product removed successfully from favorite.');
    }
}
