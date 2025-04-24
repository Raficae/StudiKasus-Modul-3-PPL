<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EditTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testEdit(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/notes')
                    ->clickLink('Edit')
                    ->assertPathIs('/edit-note-page')
                    ->assertSee('UPDATE');
        });
    }
}
