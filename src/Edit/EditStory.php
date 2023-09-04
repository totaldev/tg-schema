<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Input\InputStoryAreas;
use Totaldev\TgSchema\Input\InputStoryContent;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

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
        int $storyId,
        InputStoryContent $content,
        InputStoryAreas $areas,
        FormattedText $caption,
    ) {
        $this->storyId = $storyId;
        $this->content = $content;
        $this->areas = $areas;
        $this->caption = $caption;
    }

    public static function fromArray(array $array): EditStory
    {
        return new static(
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
            'story_id' => $this->storyId,
            'content' => $this->content->typeSerialize(),
            'areas' => $this->areas->typeSerialize(),
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

    public function getAreas(): InputStoryAreas
    {
        return $this->areas;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }
}
