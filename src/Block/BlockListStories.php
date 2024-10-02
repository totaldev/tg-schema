<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Block;

/**
 * The block list that disallows viewing of stories of the current user.
 */
class BlockListStories extends BlockList
{
    public const TYPE_NAME = 'blockListStories';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BlockListStories
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
