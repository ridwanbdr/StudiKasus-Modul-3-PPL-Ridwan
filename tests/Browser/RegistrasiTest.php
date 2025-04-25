<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Modul 3')
                ->clickLink('Register')
                ->assertPathIs('/register')
                ->type('name', 'Ridwan Abdurahman')
                ->type('email', 'ridwan@gmail.com')
                ->type('password', '123123123')
                ->type('password_confirmation', '123123123')
                ->press('REGISTER');
        });
    }
}
