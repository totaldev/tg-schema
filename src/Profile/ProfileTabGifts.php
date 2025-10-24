<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Profile;

/**
 * A tab with gifts received by the user or the channel chat.
 */
class ProfileTabGifts extends ProfileTab
{
    public const string TYPE_NAME = 'profileTabGifts';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ProfileTabGifts
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
