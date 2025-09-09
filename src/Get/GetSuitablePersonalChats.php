<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a list of channel chats, which can be used as a personal chat.
 */
class GetSuitablePersonalChats extends TdFunction
{
    public const TYPE_NAME = 'getSuitablePersonalChats';

    public function __construct() {}

    public static function fromArray(array $array): GetSuitablePersonalChats
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
