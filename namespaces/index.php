<?php
// To use dependencies we need to use the autoload file
require __DIR__ . '/vendor/autoload.php';

// Add the random class dependency.
use Rych\Random\Random;

echo (new Random())->getRandomInteger(1,5);
