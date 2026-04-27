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
 * Edits the text of a message (or a text of a game message). Returns the edited message after the edit is completed on the server side.
 */
class EditMessageText extends TdFunction
{
    public const string TYPE_NAME = 'editMessageText';

    public function __construct(
        /**
         * The chat the message belongs to.
         */
        protected int                 $chatId,
        /**
         * New text content of the message. Must be of type inputMessageText.
         */
        protected InputMessageContent $inputMessageContent,
        /**
         * Identifier of the message. Use messageProperties.can_be_edited to check whether the message can be edited.
         */
        protected int                 $messageId,
        /**
         * The new message reply markup; pass null if none; for bots only.
         */
        protected ?ReplyMarkup        $replyMarkup = null,
    ) {}

    public static function fromArray(array $array): EditMessageText
    {
        return new static(
            chatId             : $array['chat_id'],
            inputMessageContent: TdSchemaRegistry::fromArray($array['input_message_content']),
            messageId          : $array['message_id'],
            replyMarkup        : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
        );
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
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'input_message_content' => $this->inputMessageContent->jsonSerialize(),
            'message_id'            => $this->messageId,
            'reply_markup'          => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
        ];
    }
}
