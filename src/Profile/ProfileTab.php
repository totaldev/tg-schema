<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Profile;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a tab shown in a user or a chat profile.
 */
class ProfileTab extends TdObject
{
    public const string TYPE_NAME = 'ProfileTab';

    public function __construct() {}

    public static function fromArray(array $array): ProfileTab
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
