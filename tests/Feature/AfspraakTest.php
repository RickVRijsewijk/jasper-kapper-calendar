<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Afspraak;

class AfspraakTest extends TestCase
{
    use RefreshDatabase;

    public function test_afspraak_maken_page_loads(): void
    {
        $response = $this->get(route('afspraak.maken'));
        $response->assertOk();
        $response->assertSee('Nieuwe afspraak maken');
    }

    public function test_store_afspraak_success(): void
    {
        $response = $this->post(route('afspraak.store'), [
            'naam' => 'Jan Jansen',
            'email' => 'jan@example.com',
            'behandeling' => 'Knippen',
            'datum' => '2026-06-15',
            'tijd' => '10:00',
            'opmerking' => 'Test opmerking',
        ]);

        $response->assertRedirect(route('home'));
        $response->assertSessionHas('status', 'Afspraak succesvol opgeslagen!');

        $this->assertDatabaseHas('afspraken', [
            'naam' => 'Jan Jansen',
            'email' => 'jan@example.com',
            'behandeling' => 'Knippen',
            'datum' => '2026-06-15',
            'tijd' => '10:00',
            'opmerking' => 'Test opmerking',
        ]);
    }

    public function test_store_afspraak_validation_errors(): void
    {
        $response = $this->post(route('afspraak.store'), []);

        $response->assertSessionHasErrors(['naam', 'email', 'behandeling', 'datum', 'tijd']);
    }
}