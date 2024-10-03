<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reset;

use Totaldev\TgSchema\TdFunction;

/**
 * Resets all chat and scope notification settings to their default values. By default, all chats are unmuted and message previews are shown.
 */
class ResetAllNotificationSettings extends TdFunction
{
    public const TYPE_NAME = 'resetAllNotificationSettings';

    public function __construct() {}

    public static function fromArray(array $array): ResetAllNotificationSettings
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
