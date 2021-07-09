<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SimpleLineCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:create-user';

    protected function configure(): void
    {
        $this
            ->setName('line')
            ->setDescription('Show given line')
            ->addArgument('line', InputArgument::REQUIRED, 'your line');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($input->getArgument('line'));
        return Command::SUCCESS;
    }
}
