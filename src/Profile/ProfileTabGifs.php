<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Profile;

/**
 * A tab with animations posted by the channel.
 */
class ProfileTabGifs extends ProfileTab
{
    public const TYPE_NAME = 'profileTabGifs';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ProfileTabGifs
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
