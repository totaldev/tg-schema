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
    public const string TYPE_NAME = 'chatEventSlowModeDelayChanged';

    public function __construct(
        /**
         * New value of slow_mode_delay, in seconds.
         */
        protected int $newSlowModeDelay,
        /**
         * Previous value of slow_mode_delay, in seconds.
         */
        protected int $oldSlowModeDelay,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventSlowModeDelayChanged
    {
        return new static(
            newSlowModeDelay: $array['new_slow_mode_delay'],
            oldSlowModeDelay: $array['old_slow_mode_delay'],
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

    public function setNewSlowModeDelay(int $value): static
    {
        $this->newSlowModeDelay = $value;

        return $this;
    }

    public function setOldSlowModeDelay(int $value): static
    {
        $this->oldSlowModeDelay = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'new_slow_mode_delay' => $this->newSlowModeDelay,
            'old_slow_mode_delay' => $this->oldSlowModeDelay,
        ];
    }
}
