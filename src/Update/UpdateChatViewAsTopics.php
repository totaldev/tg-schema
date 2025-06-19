<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * A chat default appearance has changed.
 */
class UpdateChatViewAsTopics extends Update
{
    public const TYPE_NAME = 'updateChatViewAsTopics';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * New value of view_as_topics.
         */
        protected bool $viewAsTopics
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatViewAsTopics
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
