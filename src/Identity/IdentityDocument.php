<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Identity;

use Totaldev\TgSchema\Date\Date;
use Totaldev\TgSchema\Dated\DatedFile;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An identity document.
 */
class IdentityDocument extends TdObject
{
    public const string TYPE_NAME = 'identityDocument';

    public function __construct(
        /**
         * Document expiration date; may be null if not applicable.
         */
        protected ?Date      $expirationDate,
        /**
         * Front side of the document.
         */
        protected DatedFile  $frontSide,
        /**
         * Document number; 1-24 characters.
         */
        protected string     $number,
        /**
         * Reverse side of the document; only for driver license and identity card; may be null.
         */
        protected ?DatedFile $reverseSide,
        /**
         * Selfie with the document; may be null.
         */
        protected ?DatedFile $selfie,
        /**
         * List of files containing a certified English translation of the document.
         *
         * @var DatedFile[]
         */
        protected array      $translation,
    ) {}

    public static function fromArray(array $array): IdentityDocument
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

    public function getFrontSide(): DatedFile
    {
        return $this->frontSide;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getReverseSide(): ?DatedFile
    {
        return $this->reverseSide;
    }

    public function getSelfie(): ?DatedFile
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

    public function setFrontSide(DatedFile $value): static
    {
        $this->frontSide = $value;

        return $this;
    }

    public function setNumber(string $value): static
    {
        $this->number = $value;

        return $this;
    }

    public function setReverseSide(?DatedFile $value): static
    {
        $this->reverseSide = $value;

        return $this;
    }

    public function setSelfie(?DatedFile $value): static
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
