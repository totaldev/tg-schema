<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Profile;

/**
 * A tab with documents posted by the channel.
 */
class ProfileTabFiles extends ProfileTab
{
    public const TYPE_NAME = 'profileTabFiles';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ProfileTabFiles
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
