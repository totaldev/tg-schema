<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether aggressive anti-spam checks are enabled in the supergroup. Can be called only if supergroupFullInfo.can_toggle_aggressive_anti_spam == true.
 */
class ToggleSupergroupHasAggressiveAntiSpamEnabled extends TdFunction
{
    public const string TYPE_NAME = 'toggleSupergroupHasAggressiveAntiSpamEnabled';

    public function __construct(
        /**
         * The new value of has_aggressive_anti_spam_enabled.
         */
        protected bool $hasAggressiveAntiSpamEnabled,
        /**
         * The identifier of the supergroup, which isn't a broadcast group.
         */
        protected int  $supergroupId,
    ) {}

    public static function fromArray(array $array): ToggleSupergroupHasAggressiveAntiSpamEnabled
    {
        return new static(
            hasAggressiveAntiSpamEnabled: $array['has_aggressive_anti_spam_enabled'],
            supergroupId                : $array['supergroup_id'],
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

    public function setHasAggressiveAntiSpamEnabled(bool $value): static
    {
        $this->hasAggressiveAntiSpamEnabled = $value;

        return $this;
    }

    public function setSupergroupId(int $value): static
    {
        $this->supergroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                            => static::TYPE_NAME,
            'has_aggressive_anti_spam_enabled' => $this->hasAggressiveAntiSpamEnabled,
            'supergroup_id'                    => $this->supergroupId,
        ];
    }
}
