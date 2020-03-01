<?php
namespace Bcb\Traits;

trait FileSystemTrait
{
    public static function directoryExists($path)
    {
        if (!is_dir($path)) {
            mkdir($path);
            if (is_dir($path)) {
                return true;
            }
        } else {
            return true;
        }
        return false;
    }

    public static function filesList($directory)
    {
        return array_diff(scandir($directory), array('..', '.'));
    }

    public static function generateFileNameFromTimestamp($extension)
    {
        return date('m-d-Y-h-i-sa', time()) . '.' . $extension;
    }
}