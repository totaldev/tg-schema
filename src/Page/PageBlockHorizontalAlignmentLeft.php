<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The content must be left-aligned
 */
class PageBlockHorizontalAlignmentLeft extends PageBlockHorizontalAlignment
{
    public const TYPE_NAME = 'pageBlockHorizontalAlignmentLeft';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockHorizontalAlignmentLeft
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
