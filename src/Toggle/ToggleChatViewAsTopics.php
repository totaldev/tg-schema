<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the view_as_topics setting of a forum chat or Saved Messages.
 */
class ToggleChatViewAsTopics extends TdFunction
{
    public const TYPE_NAME = 'toggleChatViewAsTopics';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * New value of view_as_topics.
         */
        protected bool $viewAsTopics
    ) {}

    public static function fromArray(array $array): ToggleChatViewAsTopics
    {
        return new static(
            $array['chat_id'],
            $array['view_as_topics'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getViewAsTopics(): bool
    {
        return $this->viewAsTopics;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'view_as_topics' => $this->viewAsTopics,
        ];
    }
}
