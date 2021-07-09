<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application('Demo');

$application->add(new \App\SimpleLineCommand());
$application->add(new \App\XTimesStringCommand());
$application->add(new \App\SurveyCommand());

$application->run(); 
