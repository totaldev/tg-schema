<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The story can be viewed by everyone
 */
class StoryPrivacySettingsEveryone extends StoryPrivacySettings
{
    public const TYPE_NAME = 'storyPrivacySettingsEveryone';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryPrivacySettingsEveryone
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
