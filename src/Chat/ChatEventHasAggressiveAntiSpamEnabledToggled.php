<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The has_aggressive_anti_spam_enabled setting of a supergroup was toggled.
 */
class ChatEventHasAggressiveAntiSpamEnabledToggled extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventHasAggressiveAntiSpamEnabledToggled';

    public function __construct(
        /**
         * New value of has_aggressive_anti_spam_enabled.
         */
        protected bool $hasAggressiveAntiSpamEnabled
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventHasAggressiveAntiSpamEnabledToggled
    {
        return new static(
            $array['has_aggressive_anti_spam_enabled'],
        );
    }

    public function getHasAggressiveAntiSpamEnabled(): bool
    {
        return $this->hasAggressiveAntiSpamEnabled;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                            => static::TYPE_NAME,
            'has_aggressive_anti_spam_enabled' => $this->hasAggressiveAntiSpamEnabled,
        ];
    }
}
