<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Start;

use Totaldev\TgSchema\TdFunction;

/**
 * Starts recording of an active group call; for video chats only. Requires groupCall.can_be_managed right.
 */
class StartGroupCallRecording extends TdFunction
{
    public const TYPE_NAME = 'startGroupCallRecording';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int    $groupCallId,
        /**
         * Group call recording title; 0-64 characters.
         */
        protected string $title,
        /**
         * Pass true to record a video file instead of an audio file.
         */
        protected bool   $recordVideo,
        /**
         * Pass true to use portrait orientation for video instead of landscape one.
         */
        protected bool   $usePortraitOrientation
    ) {}

    public static function fromArray(array $array): StartGroupCallRecording
    {
        return new static(
            $array['group_call_id'],
            $array['title'],
            $array['record_video'],
            $array['use_portrait_orientation'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getRecordVideo(): bool
    {
        return $this->recordVideo;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getUsePortraitOrientation(): bool
    {
        return $this->usePortraitOrientation;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'group_call_id'            => $this->groupCallId,
            'title'                    => $this->title,
            'record_video'             => $this->recordVideo,
            'use_portrait_orientation' => $this->usePortraitOrientation,
        ];
    }
}
