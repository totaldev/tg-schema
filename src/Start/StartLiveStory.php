<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Start;

use Totaldev\TgSchema\Story\StoryPrivacySettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Starts a new live story on behalf of a chat; requires can_post_stories administrator right for channel chats.
 */
class StartLiveStory extends TdFunction
{
    public const string TYPE_NAME = 'startLiveStory';

    public function __construct(
        /**
         * Identifier of the chat that will start the live story. Pass Saved Messages chat identifier when starting a live story on behalf of the current user, or a channel chat identifier.
         */
        protected int                  $chatId,
        /**
         * Pass true to allow viewers of the story to send messages.
         */
        protected bool                 $enableMessages,
        /**
         * Pass true to create an RTMP stream instead of an ordinary group call.
         */
        protected bool                 $isRtmpStream,
        /**
         * The minimum number of Telegram Stars that must be paid by viewers for each sent message to the call; 0-getOption("paid_group_call_message_star_count_max").
         */
        protected int                  $paidMessageStarCount,
        /**
         * The privacy settings for the story; ignored for stories posted on behalf of channel chats.
         */
        protected StoryPrivacySettings $privacySettings,
        /**
         * Pass true if the content of the story must be protected from screenshotting.
         */
        protected bool                 $protectContent,
    ) {}

    public static function fromArray(array $array): StartLiveStory
    {
        return new static(
            chatId              : $array['chat_id'],
            enableMessages      : $array['enable_messages'],
            isRtmpStream        : $array['is_rtmp_stream'],
            paidMessageStarCount: $array['paid_message_star_count'],
            privacySettings     : TdSchemaRegistry::fromArray($array['privacy_settings']),
            protectContent      : $array['protect_content'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getEnableMessages(): bool
    {
        return $this->enableMessages;
    }

    public function getIsRtmpStream(): bool
    {
        return $this->isRtmpStream;
    }

    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    public function getPrivacySettings(): StoryPrivacySettings
    {
        return $this->privacySettings;
    }

    public function getProtectContent(): bool
    {
        return $this->protectContent;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setEnableMessages(bool $value): static
    {
        $this->enableMessages = $value;

        return $this;
    }

    public function setIsRtmpStream(bool $value): static
    {
        $this->isRtmpStream = $value;

        return $this;
    }

    public function setPaidMessageStarCount(int $value): static
    {
        $this->paidMessageStarCount = $value;

        return $this;
    }

    public function setPrivacySettings(StoryPrivacySettings $value): static
    {
        $this->privacySettings = $value;

        return $this;
    }

    public function setProtectContent(bool $value): static
    {
        $this->protectContent = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'chat_id'                 => $this->chatId,
            'enable_messages'         => $this->enableMessages,
            'is_rtmp_stream'          => $this->isRtmpStream,
            'paid_message_star_count' => $this->paidMessageStarCount,
            'privacy_settings'        => $this->privacySettings->jsonSerialize(),
            'protect_content'         => $this->protectContent,
        ];
    }
}
