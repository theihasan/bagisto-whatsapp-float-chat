<?php

namespace Ihasan\WhatsApp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ihasan\WhatsApp\WhatsApp
 */
class WhatsApp extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ihasan\WhatsApp\WhatsApp::class;
    }
}
