<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sponsored;

use Totaldev\TgSchema\Message\MessageContent;
use Totaldev\TgSchema\Message\MessageSponsor;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a sponsored message.
 */
class SponsoredMessage extends TdObject
{
    public const TYPE_NAME = 'sponsoredMessage';

    public function __construct(
        /**
         * Message identifier; unique for the chat to which the sponsored message belongs among both ordinary and sponsored messages.
         */
        protected int            $messageId,
        /**
         * True, if the message needs to be labeled as "recommended" instead of "sponsored".
         */
        protected bool           $isRecommended,
        /**
         * True, if the message can be reported to Telegram moderators through reportChatSponsoredMessage.
         */
        protected bool           $canBeReported,
        /**
         * Content of the message. Currently, can be only of the types messageText, messageAnimation, messagePhoto, or messageVideo. Video messages can be viewed fullscreen.
         */
        protected MessageContent $content,
        /**
         * Information about the sponsor of the message.
         */
        protected MessageSponsor $sponsor,
        /**
         * Title of the sponsored message.
         */
        protected string         $title,
        /**
         * Text for the message action button.
         */
        protected string         $buttonText,
        /**
         * Identifier of the accent color for title, button text and message background.
         */
        protected int            $accentColorId,
        /**
         * Identifier of a custom emoji to be shown on the message background; 0 if none.
         */
        protected int            $backgroundCustomEmojiId,
        /**
         * If non-empty, additional information about the sponsored message to be shown along with the message.
         */
        protected string         $additionalInfo,
    ) {}

    public static function fromArray(array $array): SponsoredMessage
    {
        return new static(
            $array['message_id'],
            $array['is_recommended'],
            $array['can_be_reported'],
            TdSchemaRegistry::fromArray($array['content']),
            TdSchemaRegistry::fromArray($array['sponsor']),
            $array['title'],
            $array['button_text'],
            $array['accent_color_id'],
            $array['background_custom_emoji_id'],
            $array['additional_info'],
        );
    }

    public function getAccentColorId(): int
    {
        return $this->accentColorId;
    }

    public function getAdditionalInfo(): string
    {
        return $this->additionalInfo;
    }

    public function getBackgroundCustomEmojiId(): int
    {
        return $this->backgroundCustomEmojiId;
    }

    public function getButtonText(): string
    {
        return $this->buttonText;
    }

    public function getCanBeReported(): bool
    {
        return $this->canBeReported;
    }

    public function getContent(): MessageContent
    {
        return $this->content;
    }

    public function getIsRecommended(): bool
    {
        return $this->isRecommended;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getSponsor(): MessageSponsor
    {
        return $this->sponsor;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'message_id'                 => $this->messageId,
            'is_recommended'             => $this->isRecommended,
            'can_be_reported'            => $this->canBeReported,
            'content'                    => $this->content->typeSerialize(),
            'sponsor'                    => $this->sponsor->typeSerialize(),
            'title'                      => $this->title,
            'button_text'                => $this->buttonText,
            'accent_color_id'            => $this->accentColorId,
            'background_custom_emoji_id' => $this->backgroundCustomEmojiId,
            'additional_info'            => $this->additionalInfo,
        ];
    }
}
