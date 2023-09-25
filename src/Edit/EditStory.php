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
 * Changes content and caption of a story. Can be called only if story.can_be_edited == true
 */
class EditStory extends TdFunction
{
    public const TYPE_NAME = 'editStory';

    /**
     * Identifier of the chat that posted the story
     *
     * @var int
     */
    protected int $storySenderChatId;

    /**
     * Identifier of the story to edit
     *
     * @var int
     */
    protected int $storyId;

    /**
     * New content of the story; pass null to keep the current content
     *
     * @var InputStoryContent
     */
    protected InputStoryContent $content;

    /**
     * New clickable rectangle areas to be shown on the story media; pass null to keep the current areas. Areas can't be edited if story content isn't changed
     *
     * @var InputStoryAreas
     */
    protected InputStoryAreas $areas;

    /**
     * New story caption; pass null to keep the current caption
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    public function __construct(
        int $storySenderChatId,
        int $storyId,
        InputStoryContent $content,
        InputStoryAreas $areas,
        FormattedText $caption,
    ) {
        $this->storySenderChatId = $storySenderChatId;
        $this->storyId = $storyId;
        $this->content = $content;
        $this->areas = $areas;
        $this->caption = $caption;
    }

    public static function fromArray(array $array): EditStory
    {
        return new static(
            $array['story_sender_chat_id'],
            $array['story_id'],
            TdSchemaRegistry::fromArray($array['content']),
            TdSchemaRegistry::fromArray($array['areas']),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story_sender_chat_id' => $this->storySenderChatId,
            'story_id' => $this->storyId,
            'content' => $this->content->typeSerialize(),
            'areas' => $this->areas->typeSerialize(),
            'caption' => $this->caption->typeSerialize(),
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

    public function getContent(): InputStoryContent
    {
        return $this->content;
    }

    public function getAreas(): InputStoryAreas
    {
        return $this->areas;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }
}
