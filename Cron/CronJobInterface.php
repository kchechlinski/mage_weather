<?php declare(strict_types=1);

namespace Codeal\Weather\Cron;

interface CronJobInterface
{
    public function execute(): void;
}
