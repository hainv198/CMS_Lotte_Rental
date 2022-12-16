<?php

namespace App\Http\Controllers;

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
        return view('mobile.services.rental-car');
    }

    public function EquipmentMobile() {
        return view('mobile.services.equipment-rental');
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