<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Input\InputStoryAreas;
use Totaldev\TgSchema\Input\InputStoryContent;
use Totaldev\TgSchema\Story\StoryPrivacySettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes a story posted by the bot on behalf of a business account; for bots only.
 */
class EditBusinessStory extends TdFunction
{
    public const TYPE_NAME = 'editBusinessStory';

    public function __construct(
        /**
         * Identifier of the chat that posted the story.
         */
        protected int                  $storyPosterChatId,
        /**
         * Identifier of the story to edit.
         */
        protected int                  $storyId,
        /**
         * New content of the story.
         */
        protected InputStoryContent    $content,
        /**
         * New clickable rectangle areas to be shown on the story media.
         */
        protected InputStoryAreas      $areas,
        /**
         * New story caption.
         */
        protected FormattedText        $caption,
        /**
         * The new privacy settings for the story.
         */
        protected StoryPrivacySettings $privacySettings,
    ) {}

    public static function fromArray(array $array): EditBusinessStory
    {
        return new static(
            $array['story_poster_chat_id'],
            $array['story_id'],
            TdSchemaRegistry::fromArray($array['content']),
            TdSchemaRegistry::fromArray($array['areas']),
            TdSchemaRegistry::fromArray($array['caption']),
            TdSchemaRegistry::fromArray($array['privacy_settings']),
        );
    }

    public function getAreas(): InputStoryAreas
    {
        return $this->areas;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getContent(): InputStoryContent
    {
        return $this->content;
    }

    public function getPrivacySettings(): StoryPrivacySettings
    {
        return $this->privacySettings;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'story_poster_chat_id' => $this->storyPosterChatId,
            'story_id'             => $this->storyId,
            'content'              => $this->content->typeSerialize(),
            'areas'                => $this->areas->typeSerialize(),
            'caption'              => $this->caption->typeSerialize(),
            'privacy_settings'     => $this->privacySettings->typeSerialize(),
        ];
    }
}
