<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The owner of the chat has left.
 */
class MessageChatOwnerLeft extends MessageContent
{
    public const string TYPE_NAME = 'messageChatOwnerLeft';

    public function __construct(
        /**
         * Identifier of the user who will become the new owner of the chat if the previous owner isn't return; 0 if none.
         */
        protected int $newOwnerUserId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatOwnerLeft
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
