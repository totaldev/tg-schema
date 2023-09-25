<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Story\Story;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A story was changed
 */
class UpdateStory extends Update
{
    public const TYPE_NAME = 'updateStory';

    /**
     * The new information about the story
     *
     * @var Story
     */
    protected Story $story;

    public function __construct(Story $story)
    {
        parent::__construct();

        $this->story = $story;
    }

    public static function fromArray(array $array): UpdateStory
    {
        return new static(
            TdSchemaRegistry::fromArray($array['story']),
        );
    }

    public function getStory(): Story
    {
        return $this->story;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story' => $this->story->typeSerialize(),
        ];
    }
}
