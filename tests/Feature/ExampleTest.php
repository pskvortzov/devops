<?php

use App\Models\User;

it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);

});

it('returns a list of all users', function () {
    User::factory(5)->create();
    $response = $this->get('/users');
    $response->assertStatus(200);

    expect($response->getData())->toBeArray();
});

it('returns the user data', function () {
    $user = User::factory()->create();
    $response = $this->get("/users/{$user->id}");
    $response->assertStatus(200);

    expect($response->getData()->id)->toBe($user->id);
});

it('shows edit user form', function () {
    $response = $this->get('/users/edit');

    $response->assertStatus(200);
});
