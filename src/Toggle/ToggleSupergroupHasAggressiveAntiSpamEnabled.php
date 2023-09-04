<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

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
     * The identifier of the supergroup, which isn't a broadcast group
     *
     * @var int
     */
    protected int $supergroupId;

    /**
     * The new value of has_aggressive_anti_spam_enabled
     *
     * @var bool
     */
    protected bool $hasAggressiveAntiSpamEnabled;

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'has_aggressive_anti_spam_enabled' => $this->hasAggressiveAntiSpamEnabled,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function getHasAggressiveAntiSpamEnabled(): bool
    {
        return $this->hasAggressiveAntiSpamEnabled;
    }
}
