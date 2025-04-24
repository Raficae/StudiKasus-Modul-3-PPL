<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testRegister(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Register')
            ->clickLink('Register')
            ->assertPathIs('/register')
            ->type('name', 'name')
            ->type('email', 'admin@gmail.com')
            ->type('password', 'password')
            ->press('REGISTER');
        });
    }
}
