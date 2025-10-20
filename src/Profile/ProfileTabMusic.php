<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Profile;

/**
 * A tab with audio messages posted by the channel.
 */
class ProfileTabMusic extends ProfileTab
{
    public const TYPE_NAME = 'profileTabMusic';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ProfileTabMusic
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
