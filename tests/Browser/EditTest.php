<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * 
     @group edit
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Modul 3')
            ->clickLink('Log in')
            ->assertPathIs('/login')
            ->type('email', 'ridwan@gmail.com')
            ->type('password', '123123123')
            ->press('LOG IN')
            ->assertPathIs('/dashboard')
            ->assertSee('Dashboard')
            ->clickLink('Notes')
            ->clickLink('Edit')
            ->type('title', 'Task 1 Edited')
            ->type('description', 'Task 1 Edited Description')
            ->press('UPDATE');
        });
    }
}
