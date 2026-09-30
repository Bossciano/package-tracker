<?php
namespace App\Http\Controllers\Admin;
use App\Enums\ShipmentStatus; use App\Http\Controllers\Controller; use App\Models\Shipment;
class DashboardController extends Controller {public function index(){return view('admin.dashboard',['stats'=>['total'=>Shipment::count(),'delivered'=>Shipment::where('status',ShipmentStatus::DELIVERED)->count(),'in_transit'=>Shipment::where('status',ShipmentStatus::IN_TRANSIT)->count(),'delayed'=>Shipment::where('status',ShipmentStatus::DELAYED)->count(),'failed'=>Shipment::where('status',ShipmentStatus::ATTEMPT_FAILED)->count()],'recentShipments'=>Shipment::with('customer')->latest()->limit(10)->get()]);}}
