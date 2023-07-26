<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Returns list of saved notification sounds. If a sound isn't in the list, then default sound needs to be used
 */
class GetSavedNotificationSounds extends TdFunction
{
    public const TYPE_NAME = 'getSavedNotificationSounds';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetSavedNotificationSounds
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
