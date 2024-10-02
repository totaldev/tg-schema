<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes whether the paid message reaction of the user to a message is anonymous. The message must have paid reaction added by the user.
 */
class TogglePaidMessageReactionIsAnonymous extends TdFunction
{
    public const TYPE_NAME = 'togglePaidMessageReactionIsAnonymous';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int  $chatId,
        /**
         * Identifier of the message.
         */
        protected int  $messageId,
        /**
         * Pass true to make paid reaction of the user on the message anonymous; pass false to make the user's profile visible among top reactors.
         */
        protected bool $isAnonymous,
    ) {}

    public static function fromArray(array $array): TogglePaidMessageReactionIsAnonymous
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['is_anonymous'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'message_id'   => $this->messageId,
            'is_anonymous' => $this->isAnonymous,
        ];
    }
}
