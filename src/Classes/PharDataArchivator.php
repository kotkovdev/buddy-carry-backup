<?php

namespace Bcb\Classes;

use Bcb\Interfaces\AcrhivatorInterface;

class PharDataArchivator implements AcrhivatorInterface
{
    function compress($source, $destination)
    {
        $phar = new \PharData($destination);
        $phar->buildFromIterator(
                new \RecursiveIteratorIterator(
                new \RecursiveDirectoryIterator($source, \FilesystemIterator::SKIP_DOTS)),
            $source);
        var_dump(SITE_DIR);
        //$phar->buildFromDirectory($source);
    }
}