<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The has_aggressive_anti_spam_enabled setting of a supergroup was toggled
 */
class ChatEventHasAggressiveAntiSpamEnabledToggled extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventHasAggressiveAntiSpamEnabledToggled';

    /**
     * New value of has_aggressive_anti_spam_enabled
     *
     * @var bool
     */
    protected bool $hasAggressiveAntiSpamEnabled;

    public function __construct(bool $hasAggressiveAntiSpamEnabled)
    {
        parent::__construct();

        $this->hasAggressiveAntiSpamEnabled = $hasAggressiveAntiSpamEnabled;
    }

    public static function fromArray(array $array): ChatEventHasAggressiveAntiSpamEnabledToggled
    {
        return new static(
            $array['has_aggressive_anti_spam_enabled'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'has_aggressive_anti_spam_enabled' => $this->hasAggressiveAntiSpamEnabled,
        ];
    }

    public function getHasAggressiveAntiSpamEnabled(): bool
    {
        return $this->hasAggressiveAntiSpamEnabled;
    }
}
