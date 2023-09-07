<?php

use function Pest\Livewire\livewire;

it('can match a snapshot of a livewire component', function () {
    expect(livewire(\App\Livewire\Test::class))
        ->toMatchSnapshot();
});
