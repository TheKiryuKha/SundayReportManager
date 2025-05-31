<?php

namespace App\Console\Commands;

use App\Action\CreatePoint;
use Illuminate\Console\Command;
use function Laravel\Prompts\textarea;

class SavePoint extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:save';

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
        $point = textarea('Write the point:');

        $action->handle($point);
    }
}
