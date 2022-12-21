<?php

namespace App\Http\Controllers;

use App\Models\RentalCar;
use Illuminate\Http\Request;

class RentalCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rental_car = RentalCar::where('type',1)
//            ->where('status', 1)
            ->limit(6)
            ->orderBy('type','DESC')
            ->get();
//        dd($long_time);
        $rental_bus = RentalCar::where('type',2)

            ->limit(6)
            ->orderBy('type','DESC')
            ->get();
//        dd($short_time);


        return view('components.services.rental-car',[
           'rental_car' => $rental_car,
            'rental_bus'=>$rental_bus

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
     * @param  \App\Models\RentalCar  $rentalCar
     * @return \Illuminate\Http\Response
     */
    public function show(RentalCar $rentalCar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RentalCar  $rentalCar
     * @return \Illuminate\Http\Response
     */
    public function edit(RentalCar $rentalCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RentalCar  $rentalCar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RentalCar $rentalCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RentalCar  $rentalCar
     * @return \Illuminate\Http\Response
     */
    public function destroy(RentalCar $rentalCar)
    {
        //
    }
}
