<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Profile;

/**
 * A tab with stories posted by the user or the channel chat and saved to profile.
 */
class ProfileTabPosts extends ProfileTab
{
    public const TYPE_NAME = 'profileTabPosts';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ProfileTabPosts
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
