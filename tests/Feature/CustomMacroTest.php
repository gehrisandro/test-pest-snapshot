<?php

use Pest\Plugins\Snapshot;

test('create a custom macro', function () {
    Snapshot::macro('time', function (string $value): string {
        return preg_replace('/[0-9]{2}:[0-9]{2}:[0-9]{2}/', '...', $value);
    });

    $value = 'The current time is '.now()->toTimeString();

    expect($value)
        ->toMatchSnapshot();
});
