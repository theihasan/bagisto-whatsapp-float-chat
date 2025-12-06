<?php

namespace Ihasan\WhatsApp\Commands;

use Illuminate\Console\Command;

class WhatsAppCommand extends Command
{
    public $signature = 'bagisto-whatsapp-float-chat';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
