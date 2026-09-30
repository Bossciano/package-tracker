<?php
use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema;
return new class extends Migration {public function up():void{Schema::create('customers',function(Blueprint $t){$t->id();$t->string('name');$t->string('email')->nullable()->index();$t->string('phone',50)->nullable()->index();$t->text('address')->nullable();$t->boolean('notifications_enabled')->default(true);$t->timestamps();$t->softDeletes();});}public function down():void{Schema::dropIfExists('customers');}};
