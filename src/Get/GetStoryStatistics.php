<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns detailed statistics about a story. Can be used only if story.can_get_statistics == true.
 */
class GetStoryStatistics extends TdFunction
{
    public const TYPE_NAME = 'getStoryStatistics';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * Story identifier.
         */
        protected int  $storyId,
        /**
         * Pass true if a dark theme is used by the application.
         */
        protected bool $isDark
    ) {}

    public static function fromArray(array $array): GetStoryStatistics
    {
        return new static(
            $array['chat_id'],
            $array['story_id'],
            $array['is_dark'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsDark(): bool
    {
        return $this->isDark;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'story_id' => $this->storyId,
            'is_dark'  => $this->isDark,
        ];
    }
}
