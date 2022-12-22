<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\RentalCar;

class MobileController extends Controller
{
    public function index() {
        return view('mobile.home.index');
    }
    public function AboutMobile() {
        return view('mobile.about.index');
    }
    public function HistoryMobile() {
        return view('mobile.about.history');
    }
    public function StructureMobile() {
        return view('mobile.about.structure');
    }
    public function NetworkMobile() {
        return view('mobile.about.network');
    }
    public function ServicesMobile() {
        $rental_car = RentalCar::query()
            ->where('type',1)
            ->limit(6)
            ->orderBy('type','DESC')
            ->get();
//        dd($long_time);
        $rental_bus = RentalCar::query()
            ->where('type',2)
            ->limit(6)
            ->orderBy('type','DESC')
            ->get();
//        dd($short_time);
        return view('mobile.services.rental-car',[
            'rental_car'=>$rental_car,
            'rental_bus'=>$rental_bus
        ]);
    }

    public function EquipmentMobile() {
        $equipment_banner = Equipment::query()
            ->where('type',1)
            ->limit(4)
            ->orderBy('type','DESC')
            ->get();

        $equipment_office = Equipment::query()
            ->where('type',2)
            ->limit(8)
            ->orderBy('type','DESC')
            ->get();

        $equipment_signal_generator = Equipment::query()
            ->where('type',3)
            ->limit(8)
            ->orderBy('type','DESC')
            ->get();

        $equipment_house = Equipment::query()
            ->where('type',4)
            ->limit(8)
            ->orderBy('type','DESC')
            ->get();

        $equipment_medical = Equipment::query()
            ->where('type',5)
            ->limit(8)
            ->orderBy('type','DESC')
            ->get();


        return view('mobile.services.equipment-rental',[
            'equipment_office'=>$equipment_office,
            'equipment_signal_generator'=>$equipment_signal_generator,
            'equipment_house'=>$equipment_house,
            'equipment_medical'=>$equipment_medical,
            'equipment_banner'=>$equipment_banner
        ]);
    }
    public function BuySellMobile() {
        return view('mobile.services.buy-sell-service');
    }
    public function PRCenterMobile() {
        return view('mobile.PRCenter.index');
    }
    public function CustomerCenterMobile() {
        return view('mobile.CustomerCenter.index');
    }
    public function CareerMobile() {
        return view('mobile.Career.index');
    }
}