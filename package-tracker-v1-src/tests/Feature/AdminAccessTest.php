<?php
namespace Tests\Feature;
use App\Models\User; use Illuminate\Foundation\Testing\RefreshDatabase; use Tests\TestCase;
class AdminAccessTest extends TestCase {use RefreshDatabase; public function test_guest_is_redirected():void{$this->get('/admin/dashboard')->assertRedirect('/login');}public function test_non_admin_is_forbidden():void{$u=User::factory()->create(['role'=>'user']);$this->actingAs($u)->get('/admin/dashboard')->assertForbidden();}public function test_admin_can_access_dashboard():void{$u=User::factory()->create(['role'=>'admin']);$this->actingAs($u)->get('/admin/dashboard')->assertOk();}}
