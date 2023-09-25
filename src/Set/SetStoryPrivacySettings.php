<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Story\StoryPrivacySettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes privacy settings of a story. Can be called only if story.can_be_edited == true
 */
class SetStoryPrivacySettings extends TdFunction
{
    public const TYPE_NAME = 'setStoryPrivacySettings';

    /**
     * Identifier of the chat that posted the story
     *
     * @var int
     */
    protected int $storySenderChatId;

    /**
     * Identifier of the story
     *
     * @var int
     */
    protected int $storyId;

    /**
     * The new privacy settigs for the story
     *
     * @var StoryPrivacySettings
     */
    protected StoryPrivacySettings $privacySettings;

    public function __construct(int $storySenderChatId, int $storyId, StoryPrivacySettings $privacySettings)
    {
        $this->storySenderChatId = $storySenderChatId;
        $this->storyId = $storyId;
        $this->privacySettings = $privacySettings;
    }

    public static function fromArray(array $array): SetStoryPrivacySettings
    {
        return new static(
            $array['story_sender_chat_id'],
            $array['story_id'],
            TdSchemaRegistry::fromArray($array['privacy_settings']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story_sender_chat_id' => $this->storySenderChatId,
            'story_id' => $this->storyId,
            'privacy_settings' => $this->privacySettings->typeSerialize(),
        ];
    }

    public function getStorySenderChatId(): int
    {
        return $this->storySenderChatId;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getPrivacySettings(): StoryPrivacySettings
    {
        return $this->privacySettings;
    }
}
