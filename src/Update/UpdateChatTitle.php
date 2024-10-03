<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The title of a chat was changed.
 */
class UpdateChatTitle extends Update
{
    public const TYPE_NAME = 'updateChatTitle';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * The new chat title.
         */
        protected string $title,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatTitle
    {
        return new static(
            $array['chat_id'],
            $array['title'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'title'   => $this->title,
        ];
    }
}
