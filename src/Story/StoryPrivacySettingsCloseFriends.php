<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The story can be viewed by all close friends
 */
class StoryPrivacySettingsCloseFriends extends StoryPrivacySettings
{
    public const TYPE_NAME = 'storyPrivacySettingsCloseFriends';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryPrivacySettingsCloseFriends
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
