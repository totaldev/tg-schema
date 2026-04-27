<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sponsored;

use Totaldev\TgSchema\Advertisement\AdvertisementSponsor;
use Totaldev\TgSchema\Message\MessageContent;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a sponsored message.
 */
class SponsoredMessage extends TdObject
{
    public const string TYPE_NAME = 'sponsoredMessage';

    public function __construct(
        /**
         * Identifier of the accent color for title, button text and message background.
         */
        protected int                  $accentColorId,
        /**
         * If non-empty, additional information about the sponsored message to be shown along with the message.
         */
        protected string               $additionalInfo,
        /**
         * Identifier of a custom emoji to be shown on the message background; 0 if none.
         */
        protected int                  $backgroundCustomEmojiId,
        /**
         * Text for the message action button.
         */
        protected string               $buttonText,
        /**
         * True, if the message can be reported to Telegram moderators through reportChatSponsoredMessage.
         */
        protected bool                 $canBeReported,
        /**
         * Content of the message. Currently, can be only of the types messageText, messageAnimation, messagePhoto, or messageVideo. Video messages can be viewed fullscreen. The content must be fully downloaded before the message is shown.
         */
        protected MessageContent       $content,
        /**
         * True, if the message needs to be labeled as "recommended" instead of "sponsored".
         */
        protected bool                 $isRecommended,
        /**
         * Message identifier; unique for the chat to which the sponsored message belongs among both ordinary and sponsored messages.
         */
        protected int                  $messageId,
        /**
         * Information about the sponsor of the message.
         */
        protected AdvertisementSponsor $sponsor,
        /**
         * Title of the sponsored message.
         */
        protected string               $title,
    ) {}

    public static function fromArray(array $array): SponsoredMessage
    {
        return new static(
            accentColorId          : $array['accent_color_id'],
            additionalInfo         : $array['additional_info'],
            backgroundCustomEmojiId: $array['background_custom_emoji_id'],
            buttonText             : $array['button_text'],
            canBeReported          : $array['can_be_reported'],
            content                : TdSchemaRegistry::fromArray($array['content']),
            isRecommended          : $array['is_recommended'],
            messageId              : $array['message_id'],
            sponsor                : TdSchemaRegistry::fromArray($array['sponsor']),
            title                  : $array['title'],
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

    public function getSponsor(): AdvertisementSponsor
    {
        return $this->sponsor;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setAccentColorId(int $value): static
    {
        $this->accentColorId = $value;

        return $this;
    }

    public function setAdditionalInfo(string $value): static
    {
        $this->additionalInfo = $value;

        return $this;
    }

    public function setBackgroundCustomEmojiId(int $value): static
    {
        $this->backgroundCustomEmojiId = $value;

        return $this;
    }

    public function setButtonText(string $value): static
    {
        $this->buttonText = $value;

        return $this;
    }

    public function setCanBeReported(bool $value): static
    {
        $this->canBeReported = $value;

        return $this;
    }

    public function setContent(MessageContent $value): static
    {
        $this->content = $value;

        return $this;
    }

    public function setIsRecommended(bool $value): static
    {
        $this->isRecommended = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setSponsor(AdvertisementSponsor $value): static
    {
        $this->sponsor = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'accent_color_id'            => $this->accentColorId,
            'additional_info'            => $this->additionalInfo,
            'background_custom_emoji_id' => $this->backgroundCustomEmojiId,
            'button_text'                => $this->buttonText,
            'can_be_reported'            => $this->canBeReported,
            'content'                    => $this->content->jsonSerialize(),
            'is_recommended'             => $this->isRecommended,
            'message_id'                 => $this->messageId,
            'sponsor'                    => $this->sponsor->jsonSerialize(),
            'title'                      => $this->title,
        ];
    }
}
