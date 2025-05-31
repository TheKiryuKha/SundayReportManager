<?php

use App\Action\CreatePoint;
use App\Models\Point;

it('creates point', function(){
    $action = new CreatePoint();

    $action->handle('test');

    expect(Point::first())
        ->title->toBe('test');
});