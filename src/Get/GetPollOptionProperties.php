<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns properties of a poll option. This is an offline method.
 */
class GetPollOptionProperties extends TdFunction
{
    public const string TYPE_NAME = 'getPollOptionProperties';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * Identifier of the message.
         */
        protected int    $messageId,
        /**
         * Unique identifier of the answer option, which properties will be returned.
         */
        protected string $pollOptionId,
    ) {}

    public static function fromArray(array $array): GetPollOptionProperties
    {
        return new static(
            chatId      : $array['chat_id'],
            messageId   : $array['message_id'],
            pollOptionId: $array['poll_option_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getPollOptionId(): string
    {
        return $this->pollOptionId;
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

    public function setPollOptionId(string $value): static
    {
        $this->pollOptionId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'message_id'     => $this->messageId,
            'poll_option_id' => $this->pollOptionId,
        ];
    }
}
