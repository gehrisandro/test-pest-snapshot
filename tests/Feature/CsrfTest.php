<?php

it('has a contact form', function () {
    expect($this->get('/contact'))
        ->toMatchSnapshot();
});

it('fails when the csrf macro is disabled', function () {
    \Pest\Plugins\Snapshot::disableMacro('laravel.csrf');

    expect($this->get('/contact'))
        ->toMatchSnapshot();
});
