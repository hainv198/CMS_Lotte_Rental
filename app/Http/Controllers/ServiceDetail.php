<?php

namespace App\Http\Controllers;

use App\Models\RentalCar;
use App\Models\Sales;
use Illuminate\Http\Request;

class ServiceDetail extends Controller

{
    protected $model;

    public function model()
    {
        return RentalCar::class;
    }


    public function index(Request $request) {

        $price = $request->input('price');
        $carBase = $request->input('car_base');
        $seats = $request->input('seats');
        $location = $request->input('location');

        $query =  RentalCar::query()
            ->where('type',1)
            ->orderBy('id', 'DESC');

        if ($price != ''){
            $query->where('price','>',$price);
        }

        if ($carBase != ''){
            $query->where('car_base',$carBase);
        }

        if ($seats != ''){
            $query->where('seats',$seats);
        }

        if ($location != ''){
            $query->where('location',$location);
        }

        return view('components.ServiceDetail.car_rental',[
            'rental_car'=>$query->paginate(3)

        ]);
    }

    public function carBus(Request $request) {

        $priceBus = $request->input('price');
        $carBase = $request->input('car_base');
        $seats = $request->input('seats');
        $location = $request->input('location');

        $query =  RentalCar::query()
            ->where('type',2)
            ->orderBy('id', 'DESC');

        if ($priceBus != ''){
            $query->where('price','>',$priceBus);
        }

        if ($carBase != ''){
            $query->where('car_base',$carBase);
        }

        if ($seats != ''){
            $query->where('seats',$seats);
        }

        if ($location != ''){
            $query->where('location',$location);
        }

        return view('components.ServiceDetail.bus_rental',[
           'rental_bus'=>$query->paginate(3)
        ]);
    }

    public function sale(Request $request) {
        $priceSales = $request->input('price');
        $carBase = $request->input('car_base');
        $seats = $request->input('seats');
        $location = $request->input('location');

        $query =  Sales::query()
            ->where('type',1)
            ->orderBy('id', 'DESC');

        if ($priceSales != ''){
            $query->where('price','>',$priceSales);
        }

        if ($carBase != ''){
            $query->where('car_base',$carBase);
        }

        if ($seats != ''){
            $query->where('seats',$seats);
        }

        if ($location != ''){
            $query->where('location',$location);
        }

        return view('components.ServiceDetail.sales',[
            'sales_car'=>$query->paginate(3)
        ]);
    }

    public function saleEquipment(Request $request) {
        $priceSales = $request->input('price');
        $carBase = $request->input('car_base');
        $seats = $request->input('seats');
        $location = $request->input('location');

        $query =  Sales::query()
            ->where('type',2)
            ->orderBy('id', 'DESC');

        if ($priceSales != ''){
            $query->where('price','>',$priceSales);
        }

        if ($carBase != ''){
            $query->where('car_base',$carBase);
        }

        if ($seats != ''){
            $query->where('seats',$seats);
        }

        if ($location != ''){
            $query->where('location',$location);
        }

        return view('components.ServiceDetail.sales_equipment',[
            'sales_equipment'=>$query->paginate(3)
        ]);
    }
}
