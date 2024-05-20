<?php

namespace App\Http\Controllers;

use App\Http\Requests\PreferenceAtributeRequest;
use App\Models\PresetPreference;
use Illuminate\Http\Request;

class PresetPreferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $presetpreferences = PresetPreference::latest()->paginate(6);
        $presetpreferences = PresetPreference::latest()->get();
        return view('presetpreferences.index',compact('presetpreferences'));
     
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('presetpreferences.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PreferenceAtributeRequest $request)
    {
        $request->validated();
    
        PresetPreference::create($request->all());
    
        return redirect()->route('presetpreferences.index')
                        ->with('success','Preset Preference created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\PresetPreference  $PresetPreference
     * @return \Illuminate\Http\Response
     */
    public function show(PresetPreference $presetpreference)
    {
        return view('presetpreferences.show',compact('presetpreference'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PresetPreference  $PresetPreference
     * @return \Illuminate\Http\Response
     */
    public function edit(PresetPreference $presetpreference)
    {
        return view('presetpreferences.edit',compact('presetpreference'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PresetPreference  $PresetPreference
     * @return \Illuminate\Http\Response
     */
    public function update(PreferenceAtributeRequest $request, PresetPreference $presetpreference)
    {
         $request->validated();
    
        $presetpreference->update($request->all());
    
        return redirect()->route('presetpreferences.index')
                        ->with('success','Preset Preference updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PresetPreference  $PresetPreference
     * @return \Illuminate\Http\Response
     */
    public function destroy(PresetPreference $presetpreference)
    {
        $presetpreference->delete();
    
        return redirect()->route('presetpreferences.index')
                        ->with('success','Preset Preference deleted successfully');
    }
}
