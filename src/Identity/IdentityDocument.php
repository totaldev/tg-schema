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
    public const TYPE_NAME = 'identityDocument';

    public function __construct(
        /**
         * Document number; 1-24 characters.
         */
        protected string     $number,
        /**
         * Document expiration date; may be null if not applicable.
         */
        protected ?Date      $expirationDate,
        /**
         * Front side of the document.
         */
        protected DatedFile  $frontSide,
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
            $array['number'],
            isset($array['expiration_date']) ? TdSchemaRegistry::fromArray($array['expiration_date']) : null,
            TdSchemaRegistry::fromArray($array['front_side']),
            isset($array['reverse_side']) ? TdSchemaRegistry::fromArray($array['reverse_side']) : null,
            isset($array['selfie']) ? TdSchemaRegistry::fromArray($array['selfie']) : null,
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['translation']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'number'          => $this->number,
            'expiration_date' => $this->expirationDate ?? null,
            'front_side'      => $this->frontSide->typeSerialize(),
            'reverse_side'    => $this->reverseSide ?? null,
            'selfie'          => $this->selfie ?? null,
            array_map(static fn($x) => $x->typeSerialize(), $this->translation),
        ];
    }
}
