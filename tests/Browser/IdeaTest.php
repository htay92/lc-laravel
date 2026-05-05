<?php

use App\Models\User;

it('show all ideas', function () {
    // given I'm signed in
    $this->actingAs($user = User::factory()->create());

    // and I have one idea in the db
    $user->ideas()->create([
        'description' => 'Build a thing'
    ]);
    
    // when I visit /ideas
    // I should see my one idea
    visit('/ideas')
        ->assertSee('Build a thing');
});

it('show a single idea', function () {});

it('show an edit form to update an idea', function () {});
