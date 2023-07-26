<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Describes privacy settings of a story
 */
class StoryPrivacySettings extends TdObject
{
    public const TYPE_NAME = 'StoryPrivacySettings';

    public function __construct()
    {
    }

    public static function fromArray(array $array): StoryPrivacySettings
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
