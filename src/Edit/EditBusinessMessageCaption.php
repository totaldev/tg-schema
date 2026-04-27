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
    public const string TYPE_NAME = 'editBusinessMessageCaption';

    public function __construct(
        /**
         * Unique identifier of business connection on behalf of which the message was sent.
         */
        protected string         $businessConnectionId,
        /**
         * The chat the message belongs to.
         */
        protected int            $chatId,
        /**
         * Identifier of the message.
         */
        protected int            $messageId,
        /**
         * Pass true to show the caption above the media; otherwise, the caption will be shown below the media. May be true only for animation, photo, and video messages.
         */
        protected bool           $showCaptionAboveMedia,
        /**
         * New message content caption; pass null to remove caption; 0-getOption("message_caption_length_max") characters.
         */
        protected ?FormattedText $caption = null,
        /**
         * The new message reply markup; pass null if none.
         */
        protected ?ReplyMarkup   $replyMarkup = null,
    ) {}

    public static function fromArray(array $array): EditBusinessMessageCaption
    {
        return new static(
            businessConnectionId : $array['business_connection_id'],
            caption              : (isset($array['caption']) ? TdSchemaRegistry::fromArray($array['caption']) : null),
            chatId               : $array['chat_id'],
            messageId            : $array['message_id'],
            replyMarkup          : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
            showCaptionAboveMedia: $array['show_caption_above_media'],
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function getCaption(): ?FormattedText
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

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    public function setBusinessConnectionId(string $value): static
    {
        $this->businessConnectionId = $value;

        return $this;
    }

    public function setCaption(?FormattedText $value): static
    {
        $this->caption = $value;

        return $this;
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

    public function setReplyMarkup(?ReplyMarkup $value): static
    {
        $this->replyMarkup = $value;

        return $this;
    }

    public function setShowCaptionAboveMedia(bool $value): static
    {
        $this->showCaptionAboveMedia = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'business_connection_id'   => $this->businessConnectionId,
            'caption'                  => (null !== $this->caption ? $this->caption->jsonSerialize() : null),
            'chat_id'                  => $this->chatId,
            'message_id'               => $this->messageId,
            'reply_markup'             => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
            'show_caption_above_media' => $this->showCaptionAboveMedia,
        ];
    }
}
