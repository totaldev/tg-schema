<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A profile photo was suggested to the user
 */
class PushMessageContentSuggestProfilePhoto extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentSuggestProfilePhoto';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentSuggestProfilePhoto
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
