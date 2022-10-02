<?php

namespace GuoYunhe\LaravelAvatars\Commands;

use Illuminate\Console\Command;

class LaravelAvatarsCommand extends Command
{
    public $signature = 'laravel-avatars';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
