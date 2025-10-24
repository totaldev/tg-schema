<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * Story stealth mode settings have changed.
 */
class UpdateStoryStealthMode extends Update
{
    public const string TYPE_NAME = 'updateStoryStealthMode';

    public function __construct(
        /**
         * Point in time (Unix timestamp) until stealth mode is active; 0 if it is disabled.
         */
        protected int $activeUntilDate,
        /**
         * Point in time (Unix timestamp) when stealth mode can be enabled again; 0 if there is no active cooldown.
         */
        protected int $cooldownUntilDate,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateStoryStealthMode
    {
        return new static(
            $array['active_until_date'],
            $array['cooldown_until_date'],
        );
    }

    public function getActiveUntilDate(): int
    {
        return $this->activeUntilDate;
    }

    public function getCooldownUntilDate(): int
    {
        return $this->cooldownUntilDate;
    }

    public function setActiveUntilDate(int $value): static
    {
        $this->activeUntilDate = $value;

        return $this;
    }

    public function setCooldownUntilDate(int $value): static
    {
        $this->cooldownUntilDate = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'active_until_date'   => $this->activeUntilDate,
            'cooldown_until_date' => $this->cooldownUntilDate,
        ];
    }
}
