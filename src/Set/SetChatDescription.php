<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes information about a chat. Available for basic groups, supergroups, and channels. Requires can_change_info member right.
 */
class SetChatDescription extends TdFunction
{
    public const TYPE_NAME = 'setChatDescription';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int    $chatId,
        /**
         * New chat description; 0-255 characters.
         */
        protected string $description
    ) {}

    public static function fromArray(array $array): SetChatDescription
    {
        return new static(
            $array['chat_id'],
            $array['description'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'description' => $this->description,
        ];
    }
}
