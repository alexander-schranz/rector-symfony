<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Symfony\Set\SymfonySetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->sets([SymfonySetList::SYMFONY_27, SymfonySetList::UP_TO_SYMFONY_26]);
};