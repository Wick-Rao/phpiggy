<?php
// For loading other files and configuring the project this file is used
declare(strict_types=1);

require __DIR__ ."/../../vendor/autoload.php";

use Framework\App;

$app = new App();
return $app;