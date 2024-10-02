<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\TdFunction;

/**
 * Creates a video chat (a group call bound to a chat). Available only for basic groups, supergroups and channels; requires can_manage_video_chats
 * administrator right.
 */
class CreateVideoChat extends TdFunction
{
    public const TYPE_NAME = 'createVideoChat';

    public function __construct(
        /**
         * Identifier of a chat in which the video chat will be created.
         */
        protected int    $chatId,
        /**
         * Group call title; if empty, chat title will be used.
         */
        protected string $title,
        /**
         * Point in time (Unix timestamp) when the group call is supposed to be started by an administrator; 0 to start the video chat immediately. The date must be at least 10 seconds and at most 8 days in the future.
         */
        protected int    $startDate,
        /**
         * Pass true to create an RTMP stream instead of an ordinary video chat; requires owner privileges.
         */
        protected bool   $isRtmpStream,
    ) {}

    public static function fromArray(array $array): CreateVideoChat
    {
        return new static(
            $array['chat_id'],
            $array['title'],
            $array['start_date'],
            $array['is_rtmp_stream'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'title'          => $this->title,
            'start_date'     => $this->startDate,
            'is_rtmp_stream' => $this->isRtmpStream,
        ];
    }
}
