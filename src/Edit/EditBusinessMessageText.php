<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Edits the text of a text or game message sent on behalf of a business account; for bots only.
 */
class EditBusinessMessageText extends TdFunction
{
    public const string TYPE_NAME = 'editBusinessMessageText';

    public function __construct(
        /**
         * Unique identifier of business connection on behalf of which the message was sent.
         */
        protected string              $businessConnectionId,
        /**
         * The chat the message belongs to.
         */
        protected int                 $chatId,
        /**
         * New text content of the message. Must be of type inputMessageText.
         */
        protected InputMessageContent $inputMessageContent,
        /**
         * Identifier of the message.
         */
        protected int                 $messageId,
        /**
         * The new message reply markup; pass null if none.
         */
        protected ?ReplyMarkup        $replyMarkup = null,
    ) {}

    public static function fromArray(array $array): EditBusinessMessageText
    {
        return new static(
            businessConnectionId: $array['business_connection_id'],
            chatId              : $array['chat_id'],
            inputMessageContent : TdSchemaRegistry::fromArray($array['input_message_content']),
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

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
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

    public function setInputMessageContent(InputMessageContent $value): static
    {
        $this->inputMessageContent = $value;

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
            'input_message_content'  => $this->inputMessageContent->jsonSerialize(),
            'message_id'             => $this->messageId,
            'reply_markup'           => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
        ];
    }
}
