<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Describes the types of chats to which notification settings are applied.
 */
class NotificationSettingsScope extends TdObject
{
    public const TYPE_NAME = 'NotificationSettingsScope';

    public function __construct()
    {
    }

    public static function fromArray(array $array): NotificationSettingsScope
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
