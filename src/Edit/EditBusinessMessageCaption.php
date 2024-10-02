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
 * Edits the caption of a message sent on behalf of a business account; for bots only.
 */
class EditBusinessMessageCaption extends TdFunction
{
    public const TYPE_NAME = 'editBusinessMessageCaption';

    public function __construct(
        /**
         * Unique identifier of business connection on behalf of which the message was sent.
         */
        protected string        $businessConnectionId,
        /**
         * The chat the message belongs to.
         */
        protected int           $chatId,
        /**
         * Identifier of the message.
         */
        protected int           $messageId,
        /**
         * The new message reply markup; pass null if none.
         */
        protected ReplyMarkup   $replyMarkup,
        /**
         * New message content caption; pass null to remove caption; 0-getOption("message_caption_length_max") characters.
         */
        protected FormattedText $caption,
        /**
         * Pass true to show the caption above the media; otherwise, the caption will be shown below the media. Can be true only for animation, photo, and video messages.
         */
        protected bool          $showCaptionAboveMedia,
    ) {}

    public static function fromArray(array $array): EditBusinessMessageCaption
    {
        return new static(
            $array['business_connection_id'],
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['show_caption_above_media'],
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
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
            'business_connection_id'   => $this->businessConnectionId,
            'chat_id'                  => $this->chatId,
            'message_id'               => $this->messageId,
            'reply_markup'             => $this->replyMarkup->typeSerialize(),
            'caption'                  => $this->caption->typeSerialize(),
            'show_caption_above_media' => $this->showCaptionAboveMedia,
        ];
    }
}
