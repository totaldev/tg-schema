<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a horizontal alignment of a table cell content.
 */
class PageBlockHorizontalAlignment extends TdObject
{
    public const TYPE_NAME = 'PageBlockHorizontalAlignment';

    public function __construct() {}

    public static function fromArray(array $array): PageBlockHorizontalAlignment
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
