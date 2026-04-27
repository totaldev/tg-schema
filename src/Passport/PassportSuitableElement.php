<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a Telegram Passport element that was requested by a service.
 */
class PassportSuitableElement extends TdObject
{
    public const string TYPE_NAME = 'passportSuitableElement';

    public function __construct(
        /**
         * True, if personal details must include the user's name in the language of their country of residence.
         */
        protected bool                $isNativeNameRequired,
        /**
         * True, if a selfie is required with the identity document.
         */
        protected bool                $isSelfieRequired,
        /**
         * True, if a certified English translation is required with the document.
         */
        protected bool                $isTranslationRequired,
        /**
         * Type of the element.
         */
        protected PassportElementType $type,
    ) {}

    public static function fromArray(array $array): PassportSuitableElement
    {
        return new static(
            isNativeNameRequired : $array['is_native_name_required'],
            isSelfieRequired     : $array['is_selfie_required'],
            isTranslationRequired: $array['is_translation_required'],
            type                 : TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getIsNativeNameRequired(): bool
    {
        return $this->isNativeNameRequired;
    }

    public function getIsSelfieRequired(): bool
    {
        return $this->isSelfieRequired;
    }

    public function getIsTranslationRequired(): bool
    {
        return $this->isTranslationRequired;
    }

    public function getType(): PassportElementType
    {
        return $this->type;
    }

    public function setIsNativeNameRequired(bool $value): static
    {
        $this->isNativeNameRequired = $value;

        return $this;
    }

    public function setIsSelfieRequired(bool $value): static
    {
        $this->isSelfieRequired = $value;

        return $this;
    }

    public function setIsTranslationRequired(bool $value): static
    {
        $this->isTranslationRequired = $value;

        return $this;
    }

    public function setType(PassportElementType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'is_native_name_required' => $this->isNativeNameRequired,
            'is_selfie_required'      => $this->isSelfieRequired,
            'is_translation_required' => $this->isTranslationRequired,
            'type'                    => $this->type->jsonSerialize(),
        ];
    }
}
