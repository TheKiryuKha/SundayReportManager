<?php

declare(strict_types=1);

namespace App\Action;

use App\Models\Point;
use DB;

final class CreatePoint{
    
    public function handle(string $title): Point
    {
        return DB::transaction(function() use($title){
            return Point::create([
                'title' => $title
            ]);
        });
    }
}