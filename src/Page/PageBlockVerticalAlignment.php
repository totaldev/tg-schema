<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a Vertical alignment of a table cell content
 */
class PageBlockVerticalAlignment extends TdObject
{
    public const TYPE_NAME = 'PageBlockVerticalAlignment';

    public function __construct()
    {
    }

    public static function fromArray(array $array): PageBlockVerticalAlignment
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
