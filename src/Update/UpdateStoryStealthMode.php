<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Story stealth mode settings have changed
 */
class UpdateStoryStealthMode extends Update
{
    public const TYPE_NAME = 'updateStoryStealthMode';

    /**
     * Point in time (Unix timestamp) until stealth mode is active; 0 if it is disabled
     *
     * @var int
     */
    protected int $activeUntilDate;

    /**
     * Point in time (Unix timestamp) when stealth mode can be enabled again; 0 if there is no active cooldown
     *
     * @var int
     */
    protected int $cooldownUntilDate;

    public function __construct(int $activeUntilDate, int $cooldownUntilDate)
    {
        parent::__construct();

        $this->activeUntilDate = $activeUntilDate;
        $this->cooldownUntilDate = $cooldownUntilDate;
    }

    public static function fromArray(array $array): UpdateStoryStealthMode
    {
        return new static(
            $array['active_until_date'],
            $array['cooldown_until_date'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'active_until_date' => $this->activeUntilDate,
            'cooldown_until_date' => $this->cooldownUntilDate,
        ];
    }

    public function getActiveUntilDate(): int
    {
        return $this->activeUntilDate;
    }

    public function getCooldownUntilDate(): int
    {
        return $this->cooldownUntilDate;
    }
}
