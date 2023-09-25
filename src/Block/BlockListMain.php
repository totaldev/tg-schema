<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Block;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The main block list that disallows writing messages to the current user, receiving their status and photo, viewing of stories, and some other actions
 */
class BlockListMain extends BlockList
{
    public const TYPE_NAME = 'blockListMain';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BlockListMain
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
