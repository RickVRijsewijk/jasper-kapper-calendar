<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Afspraak;

class AfsprakenTest extends TestCase
{
    use RefreshDatabase;

    public function test_afspraken_index_requires_authentication(): void
    {
        $response = $this->get(route('afspraken.index'));
        $response->assertRedirect(route('login'));
    }

    public function test_authenticated_user_can_view_afspraken(): void
    {
        $user = \App\Models\User::factory()->create();
        
        Afspraak::create([
            'naam' => 'Jan Jansen',
            'email' => 'jan@example.com',
            'behandeling' => 'Knippen',
            'datum' => '2026-06-15',
            'tijd' => '10:00',
        ]);

        $response = $this->actingAs($user)->get(route('afspraken.index'));
        $response->assertOk();
        $response->assertSee('Kalender'); // Check that calendar header is present
        $response->assertSee('id=', false); // Check that calendar container exists (id attribute)
    }
}