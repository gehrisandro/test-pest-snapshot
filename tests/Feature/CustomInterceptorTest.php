<?php

use App\Data\Color;
use Pest\Plugins\Snapshot;

test('create custom interceptor', function () {
    Snapshot::intercept(Color::class, function (Color $color): string {
        return $color->getStyle();
    });

    expect(new Color(255, 0, 0))
        ->toMatchSnapshot();
});
