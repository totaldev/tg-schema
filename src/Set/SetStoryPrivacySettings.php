<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Story\StoryPrivacySettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes privacy settings of a story. The method can be called only for stories posted on behalf of the current user and if story.can_set_privacy_settings ==
 * true.
 */
class SetStoryPrivacySettings extends TdFunction
{
    public const string TYPE_NAME = 'setStoryPrivacySettings';

    public function __construct(
        /**
         * The new privacy settings for the story.
         */
        protected StoryPrivacySettings $privacySettings,
        /**
         * Identifier of the story.
         */
        protected int                  $storyId,
    ) {}

    public static function fromArray(array $array): SetStoryPrivacySettings
    {
        return new static(
            privacySettings: TdSchemaRegistry::fromArray($array['privacy_settings']),
            storyId        : $array['story_id'],
        );
    }

    public function getPrivacySettings(): StoryPrivacySettings
    {
        return $this->privacySettings;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function setPrivacySettings(StoryPrivacySettings $value): static
    {
        $this->privacySettings = $value;

        return $this;
    }

    public function setStoryId(int $value): static
    {
        $this->storyId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'privacy_settings' => $this->privacySettings->jsonSerialize(),
            'story_id'         => $this->storyId,
        ];
    }
}
