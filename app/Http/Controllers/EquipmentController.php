<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\EquipmentModel;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipment_banner = Equipment::where('type',1)
            ->limit(4)
            ->orderBy('type','DESC')
            ->get();

        $equipment_office = Equipment::where('type',2)
            ->limit(8)
            ->orderBy('type','DESC')
            ->get();

        $equipment_signal_generator = Equipment::where('type',3)
            ->limit(8)
            ->orderBy('type','DESC')
            ->get();

        $equipment_house = Equipment::where('type',4)
            ->limit(8)
            ->orderBy('type','DESC')
            ->get();

        $equipment_medical = Equipment::where('type',5)
            ->limit(8)
            ->orderBy('type','DESC')
            ->get();


        return view('components.services.equipment-rental',[
            'equipment_office'=>$equipment_office,
            'equipment_signal_generator'=>$equipment_signal_generator,
            'equipment_house'=>$equipment_house,
            'equipment_medical'=>$equipment_medical,
            'equipment_banner'=>$equipment_banner
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipment $equipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipment $equipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment)
    {
        //
    }
}
