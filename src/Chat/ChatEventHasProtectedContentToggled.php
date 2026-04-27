<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The has_protected_content setting of a channel was toggled.
 */
class ChatEventHasProtectedContentToggled extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventHasProtectedContentToggled';

    public function __construct(
        /**
         * New value of has_protected_content.
         */
        protected bool $hasProtectedContent
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventHasProtectedContentToggled
    {
        return new static(
            hasProtectedContent: $array['has_protected_content'],
        );
    }

    public function getHasProtectedContent(): bool
    {
        return $this->hasProtectedContent;
    }

    public function setHasProtectedContent(bool $value): static
    {
        $this->hasProtectedContent = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'has_protected_content' => $this->hasProtectedContent,
        ];
    }
}
