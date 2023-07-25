<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Changes content and caption of a previously sent story
 */
class EditStory extends TdFunction
{
    public const TYPE_NAME = 'editStory';

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
     * New story caption; pass null to keep the current caption
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    public function __construct(int $storyId, InputStoryContent $content, FormattedText $caption)
    {
        $this->storyId = $storyId;
        $this->content = $content;
        $this->caption = $caption;
    }

    public static function fromArray(array $array): EditStory
    {
        return new static(
            $array['story_id'],
            TdSchemaRegistry::fromArray($array['content']),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story_id' => $this->storyId,
            'content' => $this->content->typeSerialize(),
            'caption' => $this->caption->typeSerialize(),
        ];
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getContent(): InputStoryContent
    {
        return $this->content;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }
}
