<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns settings for automatic moving of chats to and from the Archive chat lists.
 */
class GetArchiveChatListSettings extends TdFunction
{
    public const TYPE_NAME = 'getArchiveChatListSettings';

    public function __construct() {}

    public static function fromArray(array $array): GetArchiveChatListSettings
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
