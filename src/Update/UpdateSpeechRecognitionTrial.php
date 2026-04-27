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
    public const string TYPE_NAME = 'updateSpeechRecognitionTrial';

    public function __construct(
        /**
         * Number of left speech recognition attempts this week.
         */
        protected int $leftCount,
        /**
         * The maximum allowed duration of media for speech recognition without Telegram Premium subscription, in seconds.
         */
        protected int $maxMediaDuration,
        /**
         * Point in time (Unix timestamp) when the weekly number of tries will reset; 0 if unknown.
         */
        protected int $nextResetDate,
        /**
         * The total number of allowed speech recognitions per week; 0 if none.
         */
        protected int $weeklyCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateSpeechRecognitionTrial
    {
        return new static(
            leftCount       : $array['left_count'],
            maxMediaDuration: $array['max_media_duration'],
            nextResetDate   : $array['next_reset_date'],
            weeklyCount     : $array['weekly_count'],
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

    public function setLeftCount(int $value): static
    {
        $this->leftCount = $value;

        return $this;
    }

    public function setMaxMediaDuration(int $value): static
    {
        $this->maxMediaDuration = $value;

        return $this;
    }

    public function setNextResetDate(int $value): static
    {
        $this->nextResetDate = $value;

        return $this;
    }

    public function setWeeklyCount(int $value): static
    {
        $this->weeklyCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'left_count'         => $this->leftCount,
            'max_media_duration' => $this->maxMediaDuration,
            'next_reset_date'    => $this->nextResetDate,
            'weekly_count'       => $this->weeklyCount,
        ];
    }
}
