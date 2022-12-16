<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() {
        return view('components.services.rental-car');
    }

    public function EquipmentRental() {
        return view('components.services.equipment-rental');
    }

    public function BuySellServices() {
        return view('components.services.buy-sell-service');
    }


}
