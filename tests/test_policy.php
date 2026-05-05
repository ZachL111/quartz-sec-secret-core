<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(61, 105, 18, 25, 5);
assert(Policy::score($signal_case_1) === 35);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(85, 102, 18, 6, 8);
assert(Policy::score($signal_case_2) === 212);
assert(Policy::classify($signal_case_2) === "accept");
$signal_case_3 = new Signal(106, 79, 16, 10, 11);
assert(Policy::score($signal_case_3) === 233);
assert(Policy::classify($signal_case_3) === "accept");
