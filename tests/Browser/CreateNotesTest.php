<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateNotes extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testCreateNotes(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboard')
            ->assertSee('Notes')
            ->clickLink('Notes')
            ->assertSee('Create Note')
            ->clickLink('Create Note')
            ->assertPathIs('/create-note')
            ->type('Title', 'title')
            ->type('Description', 'description')
            ->press('CREATE')
            ->assertPathIs('/note');
        });
    }
}
