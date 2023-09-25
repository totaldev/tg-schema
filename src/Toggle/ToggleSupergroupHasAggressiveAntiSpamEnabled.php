<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Toggles whether aggressive anti-spam checks are enabled in the supergroup. Can be called only if supergroupFullInfo.can_toggle_aggressive_anti_spam == true
 */
class ToggleSupergroupHasAggressiveAntiSpamEnabled extends TdFunction
{
    public const TYPE_NAME = 'toggleSupergroupHasAggressiveAntiSpamEnabled';

    /**
     * The new value of has_aggressive_anti_spam_enabled
     *
     * @var bool
     */
    protected bool $hasAggressiveAntiSpamEnabled;

    /**
     * The identifier of the supergroup, which isn't a broadcast group
     *
     * @var int
     */
    protected int $supergroupId;

    public function __construct(int $supergroupId, bool $hasAggressiveAntiSpamEnabled)
    {
        $this->supergroupId = $supergroupId;
        $this->hasAggressiveAntiSpamEnabled = $hasAggressiveAntiSpamEnabled;
    }

    public static function fromArray(array $array): ToggleSupergroupHasAggressiveAntiSpamEnabled
    {
        return new static(
            $array['supergroup_id'],
            $array['has_aggressive_anti_spam_enabled'],
        );
    }

    public function getHasAggressiveAntiSpamEnabled(): bool
    {
        return $this->hasAggressiveAntiSpamEnabled;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'has_aggressive_anti_spam_enabled' => $this->hasAggressiveAntiSpamEnabled,
        ];
    }
}
