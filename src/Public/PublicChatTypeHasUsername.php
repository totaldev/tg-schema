<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Public;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat is public, because it has an active username
 */
class PublicChatTypeHasUsername extends PublicChatType
{
    public const TYPE_NAME = 'publicChatTypeHasUsername';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PublicChatTypeHasUsername
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
