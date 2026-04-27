<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes an option from a poll.
 */
class DeletePollOption extends TdFunction
{
    public const string TYPE_NAME = 'deletePollOption';

    public function __construct(
        /**
         * Identifier of the chat to which the poll belongs.
         */
        protected int    $chatId,
        /**
         * Identifier of the message containing the poll.
         */
        protected int    $messageId,
        /**
         * Unique identifier of the option. Use pollOptionProperties.can_be_deleted to check whether the option can be deleted by the user.
         */
        protected string $optionId,
    ) {}

    public static function fromArray(array $array): DeletePollOption
    {
        return new static(
            chatId   : $array['chat_id'],
            messageId: $array['message_id'],
            optionId : $array['option_id'],
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

    public function getOptionId(): string
    {
        return $this->optionId;
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

    public function setOptionId(string $value): static
    {
        $this->optionId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'option_id'  => $this->optionId,
        ];
    }
}
