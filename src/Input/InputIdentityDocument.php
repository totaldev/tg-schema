<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Date\Date;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An identity document to be saved to Telegram Passport.
 */
class InputIdentityDocument extends TdObject
{
    public const string TYPE_NAME = 'inputIdentityDocument';

    public function __construct(
        /**
         * Front side of the document.
         */
        protected InputFile  $frontSide,
        /**
         * Document number; 1-24 characters.
         */
        protected string     $number,
        /**
         * List of files containing a certified English translation of the document.
         *
         * @var InputFile[]
         */
        protected array      $translation,
        /**
         * Document expiration date; pass null if not applicable.
         */
        protected ?Date      $expirationDate = null,
        /**
         * Reverse side of the document; only for driver license and identity card; pass null otherwise.
         */
        protected ?InputFile $reverseSide = null,
        /**
         * Selfie with the document; pass null if unavailable.
         */
        protected ?InputFile $selfie = null,
    ) {}

    public static function fromArray(array $array): InputIdentityDocument
    {
        return new static(
            expirationDate: (isset($array['expiration_date']) ? TdSchemaRegistry::fromArray($array['expiration_date']) : null),
            frontSide     : TdSchemaRegistry::fromArray($array['front_side']),
            number        : $array['number'],
            reverseSide   : (isset($array['reverse_side']) ? TdSchemaRegistry::fromArray($array['reverse_side']) : null),
            selfie        : (isset($array['selfie']) ? TdSchemaRegistry::fromArray($array['selfie']) : null),
            translation   : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['translation']),
        );
    }

    public function getExpirationDate(): ?Date
    {
        return $this->expirationDate;
    }

    public function getFrontSide(): InputFile
    {
        return $this->frontSide;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getReverseSide(): ?InputFile
    {
        return $this->reverseSide;
    }

    public function getSelfie(): ?InputFile
    {
        return $this->selfie;
    }

    public function getTranslation(): array
    {
        return $this->translation;
    }

    public function setExpirationDate(?Date $value): static
    {
        $this->expirationDate = $value;

        return $this;
    }

    public function setFrontSide(InputFile $value): static
    {
        $this->frontSide = $value;

        return $this;
    }

    public function setNumber(string $value): static
    {
        $this->number = $value;

        return $this;
    }

    public function setReverseSide(?InputFile $value): static
    {
        $this->reverseSide = $value;

        return $this;
    }

    public function setSelfie(?InputFile $value): static
    {
        $this->selfie = $value;

        return $this;
    }

    public function setTranslation(array $value): static
    {
        $this->translation = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'expiration_date' => (null !== $this->expirationDate ? $this->expirationDate->jsonSerialize() : null),
            'front_side'      => $this->frontSide->jsonSerialize(),
            'number'          => $this->number,
            'reverse_side'    => (null !== $this->reverseSide ? $this->reverseSide->jsonSerialize() : null),
            'selfie'          => (null !== $this->selfie ? $this->selfie->jsonSerialize() : null),
            'translation'     => array_map(static fn($x) => $x->jsonSerialize(), $this->translation),
        ];
    }
}
