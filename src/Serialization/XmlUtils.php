<?php
declare(strict_types=1);

namespace Ettore\Serialization;

class XmlUtils
{
    public static function openTag(string $tagName)
    {
        return "<$tagName>";
    }

    public static function closeTag(string $tagName)
    {
        return "</$tagName>";
    }

    public static function emptyTag(string $tagName)
    {
        return "<$tagName/>";
    }

    public static function renderXml(string $xmlContent, string $tagName)
    {
        return
            empty($xmlContent) ?
                self::emptyTag($tagName) :
                (
                    self::openTag($tagName) .
                    $xmlContent .
                    self::closeTag($tagName)
                );
    }

    public static function renderRootXml(string $xmlContent)
    {
        return
            '<?xml version="1.0" encoding="UTF-8"?>' .
            $xmlContent;
    }

}