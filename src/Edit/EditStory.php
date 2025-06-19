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
    public const TYPE_NAME = 'editStory';

    public function __construct(
        /**
         * Identifier of the chat that posted the story.
         */
        protected int               $storyPosterChatId,
        /**
         * Identifier of the story to edit.
         */
        protected int               $storyId,
        /**
         * New content of the story; pass null to keep the current content.
         */
        protected InputStoryContent $content,
        /**
         * New clickable rectangle areas to be shown on the story media; pass null to keep the current areas. Areas can't be edited if story content isn't changed.
         */
        protected InputStoryAreas   $areas,
        /**
         * New story caption; pass null to keep the current caption.
         */
        protected FormattedText     $caption,
    ) {}

    public static function fromArray(array $array): EditStory
    {
        return new static(
            $array['story_poster_chat_id'],
            $array['story_id'],
            TdSchemaRegistry::fromArray($array['content']),
            TdSchemaRegistry::fromArray($array['areas']),
            TdSchemaRegistry::fromArray($array['caption']),
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
        ];
    }
}
