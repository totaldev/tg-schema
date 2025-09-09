<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a block of an instant view for a web page.
 */
class PageBlock extends TdObject
{
    public const TYPE_NAME = 'PageBlock';

    public function __construct() {}

    public static function fromArray(array $array): PageBlock
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
