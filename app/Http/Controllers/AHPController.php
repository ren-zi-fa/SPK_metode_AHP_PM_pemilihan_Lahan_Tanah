<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AHPController extends Controller
{
    protected $product_atribute_required = array(
        'name'          => 'required',
        'detail'        => '',
        'harga'             => 'required',
        'perizinan_regulasi'          => 'required',
        'ketersediaan_air'     => 'required',
        'lokasi'     => 'required',
        'potensi_produksi'     => 'required',
        'aksesibilitas'    => 'required|numeric',
        'kondisi_lingkungan'  => 'required',

    );
    public function index()
    {
        $this_user = User::where('id', Auth::id())->first();

        $ahplist = DB::table('ahp')
            ->select('*')
            ->join('users', 'users.id', '=', 'ahp.creator_id')
            ->orderBy('ahp.created_at', 'desc')->get();


        return view('ahp.index', compact('ahplist', 'this_user'));
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
