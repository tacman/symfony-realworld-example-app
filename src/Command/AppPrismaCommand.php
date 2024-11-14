<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Zenstruck\Console\Attribute\Argument;
use Zenstruck\Console\InvokableServiceCommand;
use Zenstruck\Console\IO;
use Zenstruck\Console\RunsCommands;
use Zenstruck\Console\RunsProcesses;

#[AsCommand('app:prisma', 'Convert prisma to entities')]
final class AppPrismaCommand extends InvokableServiceCommand
{
    use RunsCommands;
    use RunsProcesses;

    public function __invoke(
        IO $io,
        #[Argument(description: 'name of the prisma schema file')]
        string $filename = 'realworld.prisma',
    ): void {
        $data = file_get_contents($filename);
        dd($data);
        $io->success('app:prisma success.');
    }
}
