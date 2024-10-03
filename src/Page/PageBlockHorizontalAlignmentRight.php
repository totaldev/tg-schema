<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

/**
 * The content must be right-aligned.
 */
class PageBlockHorizontalAlignmentRight extends PageBlockHorizontalAlignment
{
    public const TYPE_NAME = 'pageBlockHorizontalAlignmentRight';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockHorizontalAlignmentRight
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
