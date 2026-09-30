<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Eloquent\SoftDeletes; use Illuminate\Notifications\Notifiable;
class Customer extends Model {use HasFactory,SoftDeletes,Notifiable; protected $fillable=['name','email','phone','address','notifications_enabled']; protected function casts():array{return ['notifications_enabled'=>'boolean'];} public function shipments(){return $this->hasMany(Shipment::class);}}
