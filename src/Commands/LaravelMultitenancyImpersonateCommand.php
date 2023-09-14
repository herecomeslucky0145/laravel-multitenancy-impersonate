<?php

namespace Pratikkuikel\LaravelMultitenancyImpersonate\Commands;

use Illuminate\Console\Command;

class LaravelMultitenancyImpersonateCommand extends Command
{
    public $signature = 'hello';

    public $description = 'My command';

    public function handle(): int
    {
        $filepath = base_path('config/multitenancy.php');
        if (file_exists($filepath)) {
            $this->comment('File exists');
        } else {
            $this->comment('File doesn\'t exist');
        }
        return self::SUCCESS;
    }
}
