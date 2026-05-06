<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(79, 54, 25, 73);
assert(DomainReviewLens::score($item) === 210);
assert(DomainReviewLens::lane($item) === "ship");
