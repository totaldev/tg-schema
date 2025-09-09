<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

/**
 * The content must be middle-aligned.
 */
class PageBlockVerticalAlignmentMiddle extends PageBlockVerticalAlignment
{
    public const TYPE_NAME = 'pageBlockVerticalAlignmentMiddle';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockVerticalAlignmentMiddle
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
