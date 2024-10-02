<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Story\StoryPrivacySettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes privacy settings of a story. The method can be called only for stories posted on behalf of the current user and if story.can_be_edited == true.
 */
class SetStoryPrivacySettings extends TdFunction
{
    public const TYPE_NAME = 'setStoryPrivacySettings';

    public function __construct(
        /**
         * Identifier of the story.
         */
        protected int                  $storyId,
        /**
         * The new privacy settigs for the story.
         */
        protected StoryPrivacySettings $privacySettings,
    ) {}

    public static function fromArray(array $array): SetStoryPrivacySettings
    {
        return new static(
            $array['story_id'],
            TdSchemaRegistry::fromArray($array['privacy_settings']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'story_id'         => $this->storyId,
            'privacy_settings' => $this->privacySettings->typeSerialize(),
        ];
    }
}
