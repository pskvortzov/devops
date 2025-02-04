<?php

use App\Models\User;

test('that true is true', function () {
    expect(true)->toBeTrue();

});

test('that false is false', function () {
    expect(false)->toBeFalse();
});

test('that db is working', function () {
    User::factory(6)->create();

    $users = User::all();

    expect($users->count())->toEqual(6);
});
