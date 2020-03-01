<?php

namespace Bcb\Traits;

trait ViewTrait
{
    public static function load($name, $data)
    {
        return require_once VIEW_DIR . DIRECTORY_SEPARATOR . $name . '.php';
    }
}