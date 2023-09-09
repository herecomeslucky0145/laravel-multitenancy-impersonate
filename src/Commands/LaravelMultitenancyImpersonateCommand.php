<?php

namespace Pratikkuikel\LaravelMultitenancyImpersonate\Commands;

use Illuminate\Console\Command;

class LaravelMultitenancyImpersonateCommand extends Command
{
    public $signature = 'laravel-multitenancy-impersonate';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
