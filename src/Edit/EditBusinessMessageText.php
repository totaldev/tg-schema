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
    public const TYPE_NAME = 'editBusinessMessageText';

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
         * Identifier of the message.
         */
        protected int                 $messageId,
        /**
         * The new message reply markup; pass null if none.
         */
        protected ReplyMarkup         $replyMarkup,
        /**
         * New text content of the message. Must be of type inputMessageText.
         */
        protected InputMessageContent $inputMessageContent,
    ) {}

    public static function fromArray(array $array): EditBusinessMessageText
    {
        return new static(
            $array['business_connection_id'],
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
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

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'chat_id'                => $this->chatId,
            'message_id'             => $this->messageId,
            'reply_markup'           => $this->replyMarkup->typeSerialize(),
            'input_message_content'  => $this->inputMessageContent->typeSerialize(),
        ];
    }
}
