<?php

use App\Models\User;

test('register a user', function () {
    // when I visit the registration page
    // And I fill out and submit the form
    visit('/register')
        ->fill('name', 'Jane Doe')
        ->fill('email', 'jane@example.com')
        ->fill('password', 'passowrd123!@')
        ->press('@register-button')
        ->assertPathIs('/ideas');
    // Then I should have an account
    expect(User::where('email', 'jane@example.com')->exists())->toBe(true);

    // And I should be a signed in.
    $this->assertAuthenticated();
    // And I should be on the /ideas page.
});
