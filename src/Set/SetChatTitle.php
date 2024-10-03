<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the chat title. Supported only for basic groups, supergroups and channels. Requires can_change_info member right.
 */
class SetChatTitle extends TdFunction
{
    public const TYPE_NAME = 'setChatTitle';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * New title of the chat; 1-128 characters.
         */
        protected string $title,
    ) {}

    public static function fromArray(array $array): SetChatTitle
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
