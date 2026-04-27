<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Message\MessageSendOptions;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sent a suggested post based on a previously sent message in a channel direct messages chat. Can be also used to suggest price or time change for an existing
 * suggested post. Returns the sent message.
 */
class AddOffer extends TdFunction
{
    public const string TYPE_NAME = 'addOffer';

    public function __construct(
        /**
         * Identifier of the channel direct messages chat.
         */
        protected int                $chatId,
        /**
         * Identifier of the message in the chat which will be sent as suggested post. Use messageProperties.can_add_offer to check whether an offer can be added or messageProperties.can_edit_suggested_post_info to check whether price or time of sending of the post can be changed.
         */
        protected int                $messageId,
        /**
         * Options to be used to send the message. New information about the suggested post must always be specified.
         */
        protected MessageSendOptions $options,
    ) {}

    public static function fromArray(array $array): AddOffer
    {
        return new static(
            chatId   : $array['chat_id'],
            messageId: $array['message_id'],
            options  : TdSchemaRegistry::fromArray($array['options']),
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

    public function getOptions(): MessageSendOptions
    {
        return $this->options;
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

    public function setOptions(MessageSendOptions $value): static
    {
        $this->options = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'options'    => $this->options->jsonSerialize(),
        ];
    }
}
