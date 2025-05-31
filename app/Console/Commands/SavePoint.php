<?php

namespace App\Console\Commands;

use App\Action\CreatePoint;
use Illuminate\Console\Command;

class SavePoint extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:save {point}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Saves a point to future report';

    /**
     * Execute the console command.
     */
    public function handle(CreatePoint $action)
    {
        $action->handle((string) $this->argument('point'));
    }
}
