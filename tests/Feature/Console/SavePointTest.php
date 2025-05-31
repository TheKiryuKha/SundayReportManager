<?php

use App\Models\Point;

it('creates point', function(){
    $this->artisan('report:save')
        ->expectsQuestion('Write the point:', 'test')    
        ->assertExitCode(0);

    expect(Point::first())
        ->title->toBe('test');
});