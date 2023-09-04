<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Block;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The block list that disallows viewing of stories of the current user
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
