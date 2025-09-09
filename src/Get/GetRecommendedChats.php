<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a list of channel chats recommended to the current user.
 */
class GetRecommendedChats extends TdFunction
{
    public const TYPE_NAME = 'getRecommendedChats';

    public function __construct() {}

    public static function fromArray(array $array): GetRecommendedChats
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
