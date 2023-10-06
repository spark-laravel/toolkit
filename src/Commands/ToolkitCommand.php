<?php

namespace SparkLaravel\Toolkit\Commands;

use Illuminate\Console\Command;

class ToolkitCommand extends Command
{
    public $signature = 'toolkit';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
