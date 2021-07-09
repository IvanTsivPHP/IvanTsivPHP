<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class XTimesStringCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:create-user';

    protected function configure(): void
    {
        $this
            ->setName('x-line')
            ->setDescription('Show given line x times (2 by default)')
            ->addArgument('line', InputArgument::REQUIRED, 'tour line')
            ->addArgument('iterations', InputArgument::OPTIONAL, 'number of iterations');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $line = $input->getArgument('line');
        $repeat = $input->getArgument('iterations');
        if (!$repeat) {
           $repeat = 2;
        }
        for ($i = 0; $i < $repeat; $i++) {
           $output->writeln($line);
        }

        return Command::SUCCESS;
    }
}
