<?php

declare(strict_types=1);

namespace MyVendor\MyProject\Module;

use BEAR\Dotenv\Dotenv;
use BEAR\Package\AbstractAppModule;
use BEAR\Package\PackageModule;
use BEAR\Resource\Module\JsonSchemaModule;

use function dirname;

class AppModule extends AbstractAppModule
{
    protected function configure(): void
    {
        (new Dotenv())->load(dirname(__DIR__, 2));
        
        $this->install(new JsonSchemaModule(
            $this->appMeta->appDir . '/var/schema/response',
            $this->appMeta->appDir . '/var/schema/request'
        ));

        $this->install(new PackageModule());
    }
}
