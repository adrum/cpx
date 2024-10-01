<?php

namespace Cpx\Commands;

use Cpx\Console;
use Cpx\Package;
use Cpx\Commands\Command;
use Cpx\Composer;

class TinkerCommand extends Command
{
    public function __invoke()
    {
        $psyshConfig = realpath(__DIR__ . '/../../files/psysh-config.php');

        return Package::parse('psy/psysh')->runCommand(Console::parse("psysh --config {$psyshConfig}"));
    }
}
