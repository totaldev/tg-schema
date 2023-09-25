<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Creates a video chat (a group call bound to a chat). Available only for basic groups, supergroups and channels; requires can_manage_video_chats rights
 */
class CreateVideoChat extends TdFunction
{
    public const TYPE_NAME = 'createVideoChat';

    /**
     * Identifier of a chat in which the video chat will be created
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Pass true to create an RTMP stream instead of an ordinary video chat; requires creator privileges
     *
     * @var bool
     */
    protected bool $isRtmpStream;

    /**
     * Point in time (Unix timestamp) when the group call is supposed to be started by an administrator; 0 to start the video chat immediately. The date must
     * be at least 10 seconds and at most 8 days in the future
     *
     * @var int
     */
    protected int $startDate;

    /**
     * Group call title; if empty, chat title will be used
     *
     * @var string
     */
    protected string $title;

    public function __construct(int $chatId, string $title, int $startDate, bool $isRtmpStream)
    {
        $this->chatId = $chatId;
        $this->title = $title;
        $this->startDate = $startDate;
        $this->isRtmpStream = $isRtmpStream;
    }

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
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'title' => $this->title,
            'start_date' => $this->startDate,
            'is_rtmp_stream' => $this->isRtmpStream,
        ];
    }
}
