<?php

namespace Ihasan\WhatsApp;

use Ihasan\WhatsApp\Commands\WhatsAppCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WhatsAppServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('bagisto-whatsapp-float-chat')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_bagisto_whatsapp_float_chat_table')
            ->hasCommand(WhatsAppCommand::class);
    }
}
