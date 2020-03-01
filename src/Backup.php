<?php

namespace Bcb;

use \Bcb\Classes\PharDataArchivator;
use \Bcb\Classes\Zip;

class Backup
{
    function run()
    {
        $this->makeArchive();
    }

    function makeArchive()
    {
        try {
            if (\Bcb\Traits\FileSystemTrait::directoryExists(BACKUPS_DIR)) {
                if (class_exists('PharData')) {
                    $archivator = new \Bcb\Classes\PharDataArchivator();

                    $filename = \Bcb\Traits\FileSystemTrait::generateFileNameFromTimestamp('tar');
                    $archivator->compress(__DIR__ . '/../../../' , BACKUPS_DIR . DIRECTORY_SEPARATOR . $filename);
                    echo 'Done';
                } else {
                    throw new Exception("class PharData not exists");
                }
            }
        } catch (Exception $e) {
            var_dump($e->GetMessage());
        }
    }
}