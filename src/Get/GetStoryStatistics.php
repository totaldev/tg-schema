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
    public const string TYPE_NAME = 'getStoryStatistics';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * Pass true if a dark theme is used by the application.
         */
        protected bool $isDark,
        /**
         * Story identifier.
         */
        protected int  $storyId,
    ) {}

    public static function fromArray(array $array): GetStoryStatistics
    {
        return new static(
            chatId : $array['chat_id'],
            isDark : $array['is_dark'],
            storyId: $array['story_id'],
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setIsDark(bool $value): static
    {
        $this->isDark = $value;

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
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'is_dark'  => $this->isDark,
            'story_id' => $this->storyId,
        ];
    }
}
