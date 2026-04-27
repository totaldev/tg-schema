<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether messages are automatically translated in the channel chat; requires can_change_info administrator right in the channel. The chat must have
 * at least chatBoostFeatures.min_automatic_translation_boost_level boost level to enable automatic translation.
 */
class ToggleSupergroupHasAutomaticTranslation extends TdFunction
{
    public const string TYPE_NAME = 'toggleSupergroupHasAutomaticTranslation';

    public function __construct(
        /**
         * The new value of has_automatic_translation.
         */
        protected bool $hasAutomaticTranslation,
        /**
         * The identifier of the channel.
         */
        protected int  $supergroupId,
    ) {}

    public static function fromArray(array $array): ToggleSupergroupHasAutomaticTranslation
    {
        return new static(
            hasAutomaticTranslation: $array['has_automatic_translation'],
            supergroupId           : $array['supergroup_id'],
        );
    }

    public function getHasAutomaticTranslation(): bool
    {
        return $this->hasAutomaticTranslation;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function setHasAutomaticTranslation(bool $value): static
    {
        $this->hasAutomaticTranslation = $value;

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
            '@type'                     => static::TYPE_NAME,
            'has_automatic_translation' => $this->hasAutomaticTranslation,
            'supergroup_id'             => $this->supergroupId,
        ];
    }
}
