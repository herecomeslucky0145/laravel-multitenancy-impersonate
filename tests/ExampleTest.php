<?php

it('can test', function () {
    expect(true)->toBeTrue();
});

it('can run the artisan command', function () {
    $this->artisan('inspire')
        ->assertExitCode(0);
});
