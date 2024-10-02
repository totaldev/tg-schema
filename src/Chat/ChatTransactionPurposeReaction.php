<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * User paid for a reaction.
 */
class ChatTransactionPurposeReaction extends ChatTransactionPurpose
{
    public const TYPE_NAME = 'chatTransactionPurposeReaction';

    public function __construct(
        /**
         * Identifier of the reacted message; can be 0 or an identifier of a deleted message.
         */
        protected int $messageId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatTransactionPurposeReaction
    {
        return new static(
            $array['message_id'],
        );
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'message_id' => $this->messageId,
        ];
    }
}
