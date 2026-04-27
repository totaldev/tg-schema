<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Stop;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Stops a poll sent on behalf of a business account; for bots only.
 */
class StopBusinessPoll extends TdFunction
{
    public const string TYPE_NAME = 'stopBusinessPoll';

    public function __construct(
        /**
         * Unique identifier of business connection on behalf of which the message with the poll was sent.
         */
        protected string       $businessConnectionId,
        /**
         * The chat the message belongs to.
         */
        protected int          $chatId,
        /**
         * Identifier of the message containing the poll.
         */
        protected int          $messageId,
        /**
         * The new message reply markup; pass null if none.
         */
        protected ?ReplyMarkup $replyMarkup = null,
    ) {}

    public static function fromArray(array $array): StopBusinessPoll
    {
        return new static(
            businessConnectionId: $array['business_connection_id'],
            chatId              : $array['chat_id'],
            messageId           : $array['message_id'],
            replyMarkup         : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function setBusinessConnectionId(string $value): static
    {
        $this->businessConnectionId = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setReplyMarkup(?ReplyMarkup $value): static
    {
        $this->replyMarkup = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'chat_id'                => $this->chatId,
            'message_id'             => $this->messageId,
            'reply_markup'           => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
        ];
    }
}
