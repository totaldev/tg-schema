<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a list of recently inactive supergroups and channels. Can be used when user reaches limit on the number of joined supergroups and channels and
 * receives the error "CHANNELS_TOO_MUCH". Also, the limit can be increased with Telegram Premium.
 */
class GetInactiveSupergroupChats extends TdFunction
{
    public const TYPE_NAME = 'getInactiveSupergroupChats';

    public function __construct() {}

    public static function fromArray(array $array): GetInactiveSupergroupChats
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
