<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The parameters of speech recognition without Telegram Premium subscription has changed.
 */
class UpdateSpeechRecognitionTrial extends Update
{
    public const TYPE_NAME = 'updateSpeechRecognitionTrial';

    public function __construct(
        /**
         * The maximum allowed duration of media for speech recognition without Telegram Premium subscription, in seconds.
         */
        protected int $maxMediaDuration,
        /**
         * The total number of allowed speech recognitions per week; 0 if none.
         */
        protected int $weeklyCount,
        /**
         * Number of left speech recognition attempts this week.
         */
        protected int $leftCount,
        /**
         * Point in time (Unix timestamp) when the weekly number of tries will reset; 0 if unknown.
         */
        protected int $nextResetDate,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateSpeechRecognitionTrial
    {
        return new static(
            $array['max_media_duration'],
            $array['weekly_count'],
            $array['left_count'],
            $array['next_reset_date'],
        );
    }

    public function getLeftCount(): int
    {
        return $this->leftCount;
    }

    public function getMaxMediaDuration(): int
    {
        return $this->maxMediaDuration;
    }

    public function getNextResetDate(): int
    {
        return $this->nextResetDate;
    }

    public function getWeeklyCount(): int
    {
        return $this->weeklyCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'max_media_duration' => $this->maxMediaDuration,
            'weekly_count'       => $this->weeklyCount,
            'left_count'         => $this->leftCount,
            'next_reset_date'    => $this->nextResetDate,
        ];
    }
}
