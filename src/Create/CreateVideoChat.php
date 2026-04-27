<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\TdFunction;

/**
 * Creates a video chat (a group call bound to a chat); for basic groups, supergroups and channels only; requires can_manage_video_chats administrator right.
 */
class CreateVideoChat extends TdFunction
{
    public const string TYPE_NAME = 'createVideoChat';

    public function __construct(
        /**
         * Identifier of a chat in which the video chat will be created.
         */
        protected int    $chatId,
        /**
         * Pass true to create an RTMP stream instead of an ordinary video chat.
         */
        protected bool   $isRtmpStream,
        /**
         * Point in time (Unix timestamp) when the group call is expected to be started by an administrator; 0 to start the video chat immediately. The date must be at least 10 seconds and at most 8 days in the future.
         */
        protected int    $startDate,
        /**
         * Group call title; if empty, chat title will be used.
         */
        protected string $title,
    ) {}

    public static function fromArray(array $array): CreateVideoChat
    {
        return new static(
            chatId      : $array['chat_id'],
            isRtmpStream: $array['is_rtmp_stream'],
            startDate   : $array['start_date'],
            title       : $array['title'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsRtmpStream(): bool
    {
        return $this->isRtmpStream;
    }

    public function getStartDate(): int
    {
        return $this->startDate;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setIsRtmpStream(bool $value): static
    {
        $this->isRtmpStream = $value;

        return $this;
    }

    public function setStartDate(int $value): static
    {
        $this->startDate = $value;

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
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'is_rtmp_stream' => $this->isRtmpStream,
            'start_date'     => $this->startDate,
            'title'          => $this->title,
        ];
    }
}
