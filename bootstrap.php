<?php

require_once __DIR__ . '/vendor/autoload.php';

use Edusouza96\ChangelogView\HelloWorld;

$helloWorld = new HelloWorld();

echo $helloWorld::get();