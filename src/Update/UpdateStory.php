<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Update;

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story' => $this->story->typeSerialize(),
        ];
    }

    public function getStory(): Story
    {
        return $this->story;
    }
}
