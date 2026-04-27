<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Input\InputPollOption;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds an option to a poll.
 */
class AddPollOption extends TdFunction
{
    public const string TYPE_NAME = 'addPollOption';

    public function __construct(
        /**
         * Identifier of the chat to which the poll belongs.
         */
        protected int             $chatId,
        /**
         * Identifier of the message containing the poll. Use messagePoll.can_add_option to check whether an option can be added.
         */
        protected int             $messageId,
        /**
         * The new option.
         */
        protected InputPollOption $option,
    ) {}

    public static function fromArray(array $array): AddPollOption
    {
        return new static(
            chatId   : $array['chat_id'],
            messageId: $array['message_id'],
            option   : TdSchemaRegistry::fromArray($array['option']),
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

    public function getOption(): InputPollOption
    {
        return $this->option;
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

    public function setOption(InputPollOption $value): static
    {
        $this->option = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'option'     => $this->option->jsonSerialize(),
        ];
    }
}
