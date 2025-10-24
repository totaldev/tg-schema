<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Profile;

/**
 * A tab with voice notes posted by the channel.
 */
class ProfileTabVoice extends ProfileTab
{
    public const string TYPE_NAME = 'profileTabVoice';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ProfileTabVoice
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
