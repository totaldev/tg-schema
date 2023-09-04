<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes available user privacy settings
 */
class UserPrivacySetting extends TdObject
{
    public const TYPE_NAME = 'UserPrivacySetting';

    public function __construct()
    {
    }

    public static function fromArray(array $array): UserPrivacySetting
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
