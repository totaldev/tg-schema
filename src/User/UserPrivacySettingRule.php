<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a single rule for managing user privacy settings
 */
class UserPrivacySettingRule extends TdObject
{
    public const TYPE_NAME = 'UserPrivacySettingRule';

    public function __construct()
    {
    }

    public static function fromArray(array $array): UserPrivacySettingRule
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
