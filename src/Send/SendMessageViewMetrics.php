<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib about details of a message view by the user from a chat, a message thread or a forum topic history. The method must be called if the message
 * wasn't seen for more than 300 milliseconds, the viewport was destroyed, or the total view duration exceeded 5 minutes.
 */
class SendMessageViewMetrics extends TdFunction
{
    public const string TYPE_NAME = 'sendMessageViewMetrics';

    public function __construct(
        /**
         * The amount of time the message was seen by at least 1 pixel within 15 seconds after any action from the user; in milliseconds.
         */
        protected int $activeTimeInViewMs,
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * The ratio of the post height to the viewport height in 1/1000 fractions.
         */
        protected int $heightToViewportRatioPerMille,
        /**
         * The identifier of the message being viewed.
         */
        protected int $messageId,
        /**
         * The ratio of the viewed post height to the full post height in 1/1000 fractions; 0-1000.
         */
        protected int $seenRangeRatioPerMille,
        /**
         * The amount of time the message was seen by at least 1 pixel; in milliseconds.
         */
        protected int $timeInViewMs,
    ) {}

    public static function fromArray(array $array): SendMessageViewMetrics
    {
        return new static(
            activeTimeInViewMs           : $array['active_time_in_view_ms'],
            chatId                       : $array['chat_id'],
            heightToViewportRatioPerMille: $array['height_to_viewport_ratio_per_mille'],
            messageId                    : $array['message_id'],
            seenRangeRatioPerMille       : $array['seen_range_ratio_per_mille'],
            timeInViewMs                 : $array['time_in_view_ms'],
        );
    }

    public function getActiveTimeInViewMs(): int
    {
        return $this->activeTimeInViewMs;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getHeightToViewportRatioPerMille(): int
    {
        return $this->heightToViewportRatioPerMille;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getSeenRangeRatioPerMille(): int
    {
        return $this->seenRangeRatioPerMille;
    }

    public function getTimeInViewMs(): int
    {
        return $this->timeInViewMs;
    }

    public function setActiveTimeInViewMs(int $value): static
    {
        $this->activeTimeInViewMs = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setHeightToViewportRatioPerMille(int $value): static
    {
        $this->heightToViewportRatioPerMille = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setSeenRangeRatioPerMille(int $value): static
    {
        $this->seenRangeRatioPerMille = $value;

        return $this;
    }

    public function setTimeInViewMs(int $value): static
    {
        $this->timeInViewMs = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                              => static::TYPE_NAME,
            'active_time_in_view_ms'             => $this->activeTimeInViewMs,
            'chat_id'                            => $this->chatId,
            'height_to_viewport_ratio_per_mille' => $this->heightToViewportRatioPerMille,
            'message_id'                         => $this->messageId,
            'seen_range_ratio_per_mille'         => $this->seenRangeRatioPerMille,
            'time_in_view_ms'                    => $this->timeInViewMs,
        ];
    }
}
