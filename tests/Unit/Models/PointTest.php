<?php

declare(strict_types=1);

use App\Models\Point;

test('to array', function () {
    $point = Point::factory()->create()->fresh();

    expect(array_keys($point->toArray()))->toBe([
        'id',
        'title',
        'created_at',
        'updated_at',
    ]);
});
