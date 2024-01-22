<?php

namespace Creode\LaravelCareers\Commands;

use Illuminate\Console\Command;

class LaravelCareersCommand extends Command
{
    public $signature = 'laravel-careers';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
