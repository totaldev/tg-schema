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
 * Edits the media content of a message, including message caption. If only the caption needs to be edited, use editMessageCaption instead. The type of message
 * content in an album can't be changed with exception of replacing a photo with a video or vice versa. Returns the edited message after the edit is completed
 * on the server side.
 */
class EditMessageMedia extends TdFunction
{
    public const TYPE_NAME = 'editMessageMedia';

    public function __construct(
        /**
         * The chat the message belongs to.
         */
        protected int                 $chatId,
        /**
         * Identifier of the message. Use messageProperties.can_edit_media to check whether the message can be edited.
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

    public static function fromArray(array $array): EditMessageMedia
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
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

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'message_id'            => $this->messageId,
            'reply_markup'          => $this->replyMarkup->typeSerialize(),
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }
}
