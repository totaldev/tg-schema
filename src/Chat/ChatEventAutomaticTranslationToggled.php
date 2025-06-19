<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The has_automatic_translation setting of a channel was toggled.
 */
class ChatEventAutomaticTranslationToggled extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventAutomaticTranslationToggled';

    public function __construct(
        /**
         * New value of has_automatic_translation.
         */
        protected bool $hasAutomaticTranslation
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventAutomaticTranslationToggled
    {
        return new static(
            $array['has_automatic_translation'],
        );
    }

    public function getHasAutomaticTranslation(): bool
    {
        return $this->hasAutomaticTranslation;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'has_automatic_translation' => $this->hasAutomaticTranslation,
        ];
    }
}
