<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * Describes a story sent by the chat.
 */
class ChatStatisticsObjectTypeStory extends ChatStatisticsObjectType
{
    public const TYPE_NAME = 'chatStatisticsObjectTypeStory';

    public function __construct(
        /**
         * Story identifier.
         */
        protected int $storyId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatStatisticsObjectTypeStory
    {
        return new static(
            $array['story_id'],
        );
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'story_id' => $this->storyId,
        ];
    }
}
