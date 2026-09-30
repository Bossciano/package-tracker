<?php
namespace App\Http\Controllers;
use App\Models\Shipment; use Illuminate\Http\Request;
class TrackingController extends Controller {public function index(Request $request){$trackingNumber=strtoupper(trim($request->input('tracking','')));$shipment=null;if($trackingNumber!=='')$shipment=Shipment::query()->where('tracking_number',$trackingNumber)->with(['events'=>fn($q)=>$q->orderByDesc('created_at')])->first();return view('tracking.index',compact('shipment','trackingNumber'));}}
