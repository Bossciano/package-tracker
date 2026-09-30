<?php
namespace App\Services;
use App\Models\Shipment; use Illuminate\Support\Str;
class TrackingNumberService {public function generate():string{do{$number='PKG-'.now()->format('Ymd').'-'.strtoupper(Str::random(6));}while(Shipment::withTrashed()->where('tracking_number',$number)->exists());return $number;}}
