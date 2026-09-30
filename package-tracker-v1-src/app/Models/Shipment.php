<?php
namespace App\Models;
use App\Enums\ShipmentStatus; use Illuminate\Database\Eloquent\Factories\HasFactory; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Eloquent\SoftDeletes;
class Shipment extends Model {use HasFactory,SoftDeletes; protected $fillable=['customer_id','tracking_number','origin','destination','current_location','status','estimated_delivery','delivered_at']; protected function casts():array{return ['status'=>ShipmentStatus::class,'estimated_delivery'=>'datetime','delivered_at'=>'datetime'];} public function customer(){return $this->belongsTo(Customer::class);} public function events(){return $this->hasMany(ShipmentEvent::class);}}
