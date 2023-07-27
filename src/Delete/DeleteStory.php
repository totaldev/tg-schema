<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes a previously sent story
 */
class DeleteStory extends TdFunction
{
    public const TYPE_NAME = 'deleteStory';

    /**
     * Identifier of the story to delete
     *
     * @var int
     */
    protected int $storyId;

    public function __construct(int $storyId)
    {
        $this->storyId = $storyId;
    }

    public static function fromArray(array $array): DeleteStory
    {
        return new static(
            $array['story_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story_id' => $this->storyId,
        ];
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }
}
