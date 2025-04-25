<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
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
            ->clickLink('Create Note')
            ->assertPathIs('/create-note')
            ->type('title', 'Task 1')
            ->type('description', 'Task 1 Description')
            ->press('CREATE');
        });
    }
}
