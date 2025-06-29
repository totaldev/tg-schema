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
 * Edits the media content of a message with a text, an animation, an audio, a document, a photo or a video in a message sent on behalf of a business account;
 * for bots only.
 */
class EditBusinessMessageMedia extends TdFunction
{
    public const TYPE_NAME = 'editBusinessMessageMedia';

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
         * The new message reply markup; pass null if none; for bots only.
         */
        protected ReplyMarkup         $replyMarkup,
        /**
         * New content of the message. Must be one of the following types: inputMessageAnimation, inputMessageAudio, inputMessageDocument, inputMessagePhoto or inputMessageVideo.
         */
        protected InputMessageContent $inputMessageContent,
    ) {}

    public static function fromArray(array $array): EditBusinessMessageMedia
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
