#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
$application = new Application();

// ... register commands
$application->add(new CreateUserCommand());
$application->add(new AnagramCommand());
$application->add(new PalindromeCommand());
$application->add(new PangramCommand());
$application->run();