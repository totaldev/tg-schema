<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Date\Date;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An identity document to be saved to Telegram Passport
 */
class InputIdentityDocument extends TdObject
{
    public const TYPE_NAME = 'inputIdentityDocument';

    /**
     * Document number; 1-24 characters
     *
     * @var string
     */
    protected string $number;

    /**
     * Document expiration date; pass null if not applicable
     *
     * @var Date
     */
    protected Date $expirationDate;

    /**
     * Front side of the document
     *
     * @var InputFile
     */
    protected InputFile $frontSide;

    /**
     * Reverse side of the document; only for driver license and identity card; pass null otherwise
     *
     * @var InputFile
     */
    protected InputFile $reverseSide;

    /**
     * Selfie with the document; pass null if unavailable
     *
     * @var InputFile
     */
    protected InputFile $selfie;

    /**
     * List of files containing a certified English translation of the document
     *
     * @var InputFile[]
     */
    protected array $translation;

    public function __construct(
        string $number,
        Date $expirationDate,
        InputFile $frontSide,
        InputFile $reverseSide,
        InputFile $selfie,
        array $translation,
    ) {
        $this->number = $number;
        $this->expirationDate = $expirationDate;
        $this->frontSide = $frontSide;
        $this->reverseSide = $reverseSide;
        $this->selfie = $selfie;
        $this->translation = $translation;
    }

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'number' => $this->number,
            'expiration_date' => $this->expirationDate->typeSerialize(),
            'front_side' => $this->frontSide->typeSerialize(),
            'reverse_side' => $this->reverseSide->typeSerialize(),
            'selfie' => $this->selfie->typeSerialize(),
            array_map(fn($x) => $x->typeSerialize(), $this->translation),
        ];
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getExpirationDate(): Date
    {
        return $this->expirationDate;
    }

    public function getFrontSide(): InputFile
    {
        return $this->frontSide;
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
}