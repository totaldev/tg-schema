<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Leave;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes the current user from chat members. Private and secret chats can't be left using this method.
 */
class LeaveChat extends TdFunction
{
    public const TYPE_NAME = 'leaveChat';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): LeaveChat
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
