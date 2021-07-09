<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class SurveyCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:create-user';

    protected function configure(): void
    {
        $this
            ->setName('survey')
            ->setDescription('Run survey');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $helper = $this->getHelper('question');

        $questionName = new Question('Please enter tour name ');
        $name = $helper->ask($input, $output, $questionName);

        $questionAge = new Question('Please enter your age ');
        $age = $helper->ask($input, $output, $questionAge);

        $questionGender = new ChoiceQuestion(
            'Please select your gender',
            ['male', 'female']
        );
        $gender = $helper->ask($input, $output, $questionGender);

        $output->writeln('Hello, '. $name . '. Your age is ' . $age . ', your gender is ' . $gender);

        return Command::SUCCESS;
    }
}
