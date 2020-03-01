<?php
$autoload = require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

require_once  __DIR__ . DIRECTORY_SEPARATOR . 'globals.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'src' .DIRECTORY_SEPARATOR. 'Backup.php';

$backup = new \Bcb\Backup();
$backup->run();