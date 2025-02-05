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
