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
    public const TYPE_NAME = 'toggleSupergroupHasAutomaticTranslation';

    public function __construct(
        /**
         * The identifier of the channel.
         */
        protected int  $supergroupId,
        /**
         * The new value of has_automatic_translation.
         */
        protected bool $hasAutomaticTranslation
    ) {}

    public static function fromArray(array $array): ToggleSupergroupHasAutomaticTranslation
    {
        return new static(
            $array['supergroup_id'],
            $array['has_automatic_translation'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'supergroup_id'             => $this->supergroupId,
            'has_automatic_translation' => $this->hasAutomaticTranslation,
        ];
    }
}
