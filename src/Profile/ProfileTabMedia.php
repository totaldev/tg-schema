<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Profile;

/**
 * A tab with photos and videos posted by the channel.
 */
class ProfileTabMedia extends ProfileTab
{
    public const TYPE_NAME = 'profileTabMedia';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ProfileTabMedia
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
