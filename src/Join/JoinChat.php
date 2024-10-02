<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Join;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds the current user as a new member to a chat. Private and secret chats can't be joined using this method. May return an error with a message
 * "INVITE_REQUEST_SENT" if only a join request was created.
 */
class JoinChat extends TdFunction
{
    public const TYPE_NAME = 'joinChat';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): JoinChat
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
