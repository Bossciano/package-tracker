<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; use Illuminate\Database\Eloquent\Model;
class ShipmentEvent extends Model {use HasFactory; protected $fillable=['status','location','description','created_by']; protected function casts():array{return ['status'=>\App\Enums\ShipmentStatus::class];} public function shipment(){return $this->belongsTo(Shipment::class);} public function creator(){return $this->belongsTo(User::class,'created_by');}}
