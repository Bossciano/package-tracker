<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider; use Illuminate\Cache\RateLimiting\Limit; use Illuminate\Http\Request; use Illuminate\Support\Facades\RateLimiter;
class AppServiceProvider extends ServiceProvider {public function boot():void{RateLimiter::for('tracking',fn(Request $request)=>Limit::perMinute(30)->by($request->ip()));}}
