<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The owner of the chat has changed.
 */
class MessageChatOwnerChanged extends MessageContent
{
    public const string TYPE_NAME = 'messageChatOwnerChanged';

    public function __construct(
        /**
         * Identifier of the user who is the new owner of the chat.
         */
        protected int $newOwnerUserId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatOwnerChanged
    {
        return new static(
            newOwnerUserId: $array['new_owner_user_id'],
        );
    }

    public function getNewOwnerUserId(): int
    {
        return $this->newOwnerUserId;
    }

    public function setNewOwnerUserId(int $value): static
    {
        $this->newOwnerUserId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'new_owner_user_id' => $this->newOwnerUserId,
        ];
    }
}
