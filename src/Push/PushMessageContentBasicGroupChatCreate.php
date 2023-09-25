<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A newly created basic group
 */
class PushMessageContentBasicGroupChatCreate extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentBasicGroupChatCreate';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentBasicGroupChatCreate
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
