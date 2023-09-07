<?php

it('has a home page', function () {
    expect($this->get('/'))
        ->toMatchSnapshot();
});
