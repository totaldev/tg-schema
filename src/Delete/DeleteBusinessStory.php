<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes a story posted by the bot on behalf of a business account; for bots only.
 */
class DeleteBusinessStory extends TdFunction
{
    public const string TYPE_NAME = 'deleteBusinessStory';

    public function __construct(
        /**
         * Unique identifier of business connection.
         */
        protected string $businessConnectionId,
        /**
         * Identifier of the story to delete.
         */
        protected int    $storyId,
    ) {}

    public static function fromArray(array $array): DeleteBusinessStory
    {
        return new static(
            businessConnectionId: $array['business_connection_id'],
            storyId             : $array['story_id'],
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function setBusinessConnectionId(string $value): static
    {
        $this->businessConnectionId = $value;

        return $this;
    }

    public function setStoryId(int $value): static
    {
        $this->storyId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'story_id'               => $this->storyId,
        ];
    }
}
