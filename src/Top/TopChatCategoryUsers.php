<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Top;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A category containing frequently used private chats with non-bot users
 */
class TopChatCategoryUsers extends TopChatCategory
{
    public const TYPE_NAME = 'topChatCategoryUsers';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TopChatCategoryUsers
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}