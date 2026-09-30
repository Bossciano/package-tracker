<?php
namespace App\Enums;
enum ShipmentStatus:string {
 case PENDING='pending'; case PACKAGE_RECEIVED='package_received'; case PROCESSING='processing'; case IN_TRANSIT='in_transit'; case ARRIVED_AT_DESTINATION='arrived_at_destination'; case OUT_FOR_DELIVERY='out_for_delivery'; case DELIVERED='delivered'; case DELAYED='delayed'; case HELD='held'; case ATTEMPT_FAILED='attempt_failed'; case RETURNED='returned'; case CANCELLED='cancelled';
 public function label():string{return match($this){self::PENDING=>'Pending',self::PACKAGE_RECEIVED=>'Package Received',self::PROCESSING=>'Processing',self::IN_TRANSIT=>'In Transit',self::ARRIVED_AT_DESTINATION=>'Arrived at Destination',self::OUT_FOR_DELIVERY=>'Out for Delivery',self::DELIVERED=>'Delivered',self::DELAYED=>'Delayed',self::HELD=>'Held',self::ATTEMPT_FAILED=>'Delivery Attempt Failed',self::RETURNED=>'Returned',self::CANCELLED=>'Cancelled'};}
}
