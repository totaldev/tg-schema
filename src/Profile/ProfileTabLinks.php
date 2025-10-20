<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Profile;

/**
 * A tab with messages posted by the channel and containing links.
 */
class ProfileTabLinks extends ProfileTab
{
    public const TYPE_NAME = 'profileTabLinks';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ProfileTabLinks
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
