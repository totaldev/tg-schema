<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The slow_mode_delay setting of a supergroup was changed.
 */
class ChatEventSlowModeDelayChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventSlowModeDelayChanged';

    public function __construct(
        /**
         * Previous value of slow_mode_delay, in seconds.
         */
        protected int $oldSlowModeDelay,
        /**
         * New value of slow_mode_delay, in seconds.
         */
        protected int $newSlowModeDelay
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventSlowModeDelayChanged
    {
        return new static(
            $array['old_slow_mode_delay'],
            $array['new_slow_mode_delay'],
        );
    }

    public function getNewSlowModeDelay(): int
    {
        return $this->newSlowModeDelay;
    }

    public function getOldSlowModeDelay(): int
    {
        return $this->oldSlowModeDelay;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'old_slow_mode_delay' => $this->oldSlowModeDelay,
            'new_slow_mode_delay' => $this->newSlowModeDelay,
        ];
    }
}
