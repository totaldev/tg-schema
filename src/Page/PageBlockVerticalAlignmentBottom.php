<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

/**
 * The content must be bottom-aligned.
 */
class PageBlockVerticalAlignmentBottom extends PageBlockVerticalAlignment
{
    public const TYPE_NAME = 'pageBlockVerticalAlignmentBottom';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockVerticalAlignmentBottom
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
