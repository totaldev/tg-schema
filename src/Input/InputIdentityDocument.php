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
    public const TYPE_NAME = 'inputIdentityDocument';

    public function __construct(
        /**
         * Document number; 1-24 characters.
         */
        protected string    $number,
        /**
         * Document expiration date; pass null if not applicable.
         */
        protected Date      $expirationDate,
        /**
         * Front side of the document.
         */
        protected InputFile $frontSide,
        /**
         * Reverse side of the document; only for driver license and identity card; pass null otherwise.
         */
        protected InputFile $reverseSide,
        /**
         * Selfie with the document; pass null if unavailable.
         */
        protected InputFile $selfie,
        /**
         * List of files containing a certified English translation of the document.
         *
         * @var InputFile[]
         */
        protected array     $translation,
    ) {}

    public static function fromArray(array $array): InputIdentityDocument
    {
        return new static(
            $array['number'],
            TdSchemaRegistry::fromArray($array['expiration_date']),
            TdSchemaRegistry::fromArray($array['front_side']),
            TdSchemaRegistry::fromArray($array['reverse_side']),
            TdSchemaRegistry::fromArray($array['selfie']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['translation']),
        );
    }

    public function getExpirationDate(): Date
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

    public function getReverseSide(): InputFile
    {
        return $this->reverseSide;
    }

    public function getSelfie(): InputFile
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
            'expiration_date' => $this->expirationDate->typeSerialize(),
            'front_side'      => $this->frontSide->typeSerialize(),
            'reverse_side'    => $this->reverseSide->typeSerialize(),
            'selfie'          => $this->selfie->typeSerialize(),
            array_map(fn($x) => $x->typeSerialize(), $this->translation),
        ];
    }
}
