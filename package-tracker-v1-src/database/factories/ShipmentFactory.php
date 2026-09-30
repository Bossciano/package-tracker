<?php
namespace Database\Factories;
use App\Enums\ShipmentStatus; use Illuminate\Database\Eloquent\Factories\Factory; use Illuminate\Support\Str;
class ShipmentFactory extends Factory {public function definition():array{return ['customer_id'=>\App\Models\Customer::factory(),'tracking_number'=>'PKG-'.fake()->date('Ymd').'-'.strtoupper(Str::random(6)),'origin'=>fake()->city(),'destination'=>fake()->city(),'current_location'=>fake()->city(),'status'=>ShipmentStatus::PENDING,'estimated_delivery'=>now()->addDays(3)];}}
