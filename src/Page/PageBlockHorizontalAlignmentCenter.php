<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

/**
 * The content must be center-aligned.
 */
class PageBlockHorizontalAlignmentCenter extends PageBlockHorizontalAlignment
{
    public const TYPE_NAME = 'pageBlockHorizontalAlignmentCenter';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockHorizontalAlignmentCenter
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
