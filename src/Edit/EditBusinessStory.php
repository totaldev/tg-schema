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
    public const string TYPE_NAME = 'editBusinessStory';

    public function __construct(
        /**
         * New clickable rectangle areas to be shown on the story media.
         */
        protected InputStoryAreas      $areas,
        /**
         * New story caption.
         */
        protected FormattedText        $caption,
        /**
         * New content of the story.
         */
        protected InputStoryContent    $content,
        /**
         * The new privacy settings for the story.
         */
        protected StoryPrivacySettings $privacySettings,
        /**
         * Identifier of the story to edit.
         */
        protected int                  $storyId,
        /**
         * Identifier of the chat that posted the story.
         */
        protected int                  $storyPosterChatId,
    ) {}

    public static function fromArray(array $array): EditBusinessStory
    {
        return new static(
            areas            : TdSchemaRegistry::fromArray($array['areas']),
            caption          : TdSchemaRegistry::fromArray($array['caption']),
            content          : TdSchemaRegistry::fromArray($array['content']),
            privacySettings  : TdSchemaRegistry::fromArray($array['privacy_settings']),
            storyId          : $array['story_id'],
            storyPosterChatId: $array['story_poster_chat_id'],
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

    public function setAreas(InputStoryAreas $value): static
    {
        $this->areas = $value;

        return $this;
    }

    public function setCaption(FormattedText $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setContent(InputStoryContent $value): static
    {
        $this->content = $value;

        return $this;
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

    public function setStoryPosterChatId(int $value): static
    {
        $this->storyPosterChatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'areas'                => $this->areas->jsonSerialize(),
            'caption'              => $this->caption->jsonSerialize(),
            'content'              => $this->content->jsonSerialize(),
            'privacy_settings'     => $this->privacySettings->jsonSerialize(),
            'story_id'             => $this->storyId,
            'story_poster_chat_id' => $this->storyPosterChatId,
        ];
    }
}
