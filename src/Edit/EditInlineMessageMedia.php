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
 * Edits the media content of a message with a text, an animation, an audio, a document, a photo or a video in an inline message sent via a bot; for bots only.
 */
class EditInlineMessageMedia extends TdFunction
{
    public const TYPE_NAME = 'editInlineMessageMedia';

    public function __construct(
        /**
         * Inline message identifier.
         */
        protected string              $inlineMessageId,
        /**
         * The new message reply markup; pass null if none; for bots only.
         */
        protected ReplyMarkup         $replyMarkup,
        /**
         * New content of the message. Must be one of the following types: inputMessageAnimation, inputMessageAudio, inputMessageDocument, inputMessagePhoto or inputMessageVideo.
         */
        protected InputMessageContent $inputMessageContent,
    ) {}

    public static function fromArray(array $array): EditInlineMessageMedia
    {
        return new static(
            $array['inline_message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
        );
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'inline_message_id'     => $this->inlineMessageId,
            'reply_markup'          => $this->replyMarkup->typeSerialize(),
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }
}
