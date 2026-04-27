<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Input\InputStoryAreas;
use Totaldev\TgSchema\Input\InputStoryContent;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes content and caption of a story. Can be called only if story.can_be_edited == true.
 */
class EditStory extends TdFunction
{
    public const string TYPE_NAME = 'editStory';

    public function __construct(
        /**
         * Identifier of the story to edit.
         */
        protected int                $storyId,
        /**
         * Identifier of the chat that posted the story.
         */
        protected int                $storyPosterChatId,
        /**
         * New clickable rectangle areas to be shown on the story media; pass null to keep the current areas. Areas can't be edited if story content isn't changed.
         */
        protected ?InputStoryAreas   $areas = null,
        /**
         * New story caption; pass null to keep the current caption.
         */
        protected ?FormattedText     $caption = null,
        /**
         * New content of the story; pass null to keep the current content.
         */
        protected ?InputStoryContent $content = null,
    ) {}

    public static function fromArray(array $array): EditStory
    {
        return new static(
            areas            : (isset($array['areas']) ? TdSchemaRegistry::fromArray($array['areas']) : null),
            caption          : (isset($array['caption']) ? TdSchemaRegistry::fromArray($array['caption']) : null),
            content          : (isset($array['content']) ? TdSchemaRegistry::fromArray($array['content']) : null),
            storyId          : $array['story_id'],
            storyPosterChatId: $array['story_poster_chat_id'],
        );
    }

    public function getAreas(): ?InputStoryAreas
    {
        return $this->areas;
    }

    public function getCaption(): ?FormattedText
    {
        return $this->caption;
    }

    public function getContent(): ?InputStoryContent
    {
        return $this->content;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    public function setAreas(?InputStoryAreas $value): static
    {
        $this->areas = $value;

        return $this;
    }

    public function setCaption(?FormattedText $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setContent(?InputStoryContent $value): static
    {
        $this->content = $value;

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
            'areas'                => (null !== $this->areas ? $this->areas->jsonSerialize() : null),
            'caption'              => (null !== $this->caption ? $this->caption->jsonSerialize() : null),
            'content'              => (null !== $this->content ? $this->content->jsonSerialize() : null),
            'story_id'             => $this->storyId,
            'story_poster_chat_id' => $this->storyPosterChatId,
        ];
    }
}
