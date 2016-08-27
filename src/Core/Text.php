<?php

namespace Example\Core;

class Text
{
    private static $text;

    public static function get($key, $data = null)
    {
        if (!$key) {
            return null;
        }

        if (!self::$text) {
            self::$text = require("../src/Config/TextContent.php");
        }

        if (!array_key_exists($key, self::$text)) {
            return null;
        }

        return self::$text[$key];
    }
}