<?php
namespace Tests\Feature;
use App\Models\Customer; use App\Models\Shipment; use Illuminate\Foundation\Testing\RefreshDatabase; use Tests\TestCase;
class ShipmentTrackingTest extends TestCase {use RefreshDatabase; public function test_customer_can_track_a_shipment():void{$customer=Customer::factory()->create();$shipment=Shipment::factory()->create(['customer_id'=>$customer->id,'tracking_number'=>'PKG-TEST123']);$this->get('/track?tracking=PKG-TEST123')->assertOk()->assertSee('PKG-TEST123');}public function test_unknown_tracking_number_returns_not_found_state():void{$this->get('/track?tracking=DOES-NOT-EXIST')->assertOk()->assertSee('No shipment found');}}
