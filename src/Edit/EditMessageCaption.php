<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Edits the message content caption. Returns the edited message after the edit is completed on the server side.
 */
class EditMessageCaption extends TdFunction
{
    public const TYPE_NAME = 'editMessageCaption';

    public function __construct(
        /**
         * The chat the message belongs to.
         */
        protected int           $chatId,
        /**
         * Identifier of the message. Use messageProperties.can_be_edited to check whether the message can be edited.
         */
        protected int           $messageId,
        /**
         * The new message reply markup; pass null if none; for bots only.
         */
        protected ReplyMarkup   $replyMarkup,
        /**
         * New message content caption; 0-getOption("message_caption_length_max") characters; pass null to remove caption.
         */
        protected FormattedText $caption,
        /**
         * Pass true to show the caption above the media; otherwise, the caption will be shown below the media. May be true only for animation, photo, and video messages.
         */
        protected bool          $showCaptionAboveMedia,
    ) {}

    public static function fromArray(array $array): EditMessageCaption
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['show_caption_above_media'],
        );
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'chat_id'                  => $this->chatId,
            'message_id'               => $this->messageId,
            'reply_markup'             => $this->replyMarkup->typeSerialize(),
            'caption'                  => $this->caption->typeSerialize(),
            'show_caption_above_media' => $this->showCaptionAboveMedia,
        ];
    }
}
