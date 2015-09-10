<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use ShefPHP\TwitterApi\Console\Command\TweetCommand;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new TweetCommand());
$application->run();