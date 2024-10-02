<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * An identity document
 */
class IdentityDocument extends TdObject
{
    public const TYPE_NAME = 'identityDocument';

    /**
     * Document number; 1-24 characters
     *
     * @var string
     */
    protected string $number;

    /**
     * Document expiration date; may be null if not applicable
     *
     * @var Date|null
     */
    protected ?Date $expirationDate;

    /**
     * Front side of the document
     *
     * @var DatedFile
     */
    protected DatedFile $frontSide;

    /**
     * Reverse side of the document; only for driver license and identity card; may be null
     *
     * @var DatedFile|null
     */
    protected ?DatedFile $reverseSide;

    /**
     * Selfie with the document; may be null
     *
     * @var DatedFile|null
     */
    protected ?DatedFile $selfie;

    /**
     * List of files containing a certified English translation of the document
     *
     * @var DatedFile[]
     */
    protected array $translation;

    public function __construct(
        string $number,
        ?Date $expirationDate,
        DatedFile $frontSide,
        ?DatedFile $reverseSide,
        ?DatedFile $selfie,
        array $translation
    ) {
        $this->number = $number;
        $this->expirationDate = $expirationDate;
        $this->frontSide = $frontSide;
        $this->reverseSide = $reverseSide;
        $this->selfie = $selfie;
        $this->translation = $translation;
    }

    public static function fromArray(array $array): IdentityDocument
    {
        return new static(
            $array['number'],
            (isset($array['expiration_date']) ? TdSchemaRegistry::fromArray($array['expiration_date']) : null),
            TdSchemaRegistry::fromArray($array['front_side']),
            (isset($array['reverse_side']) ? TdSchemaRegistry::fromArray($array['reverse_side']) : null),
            (isset($array['selfie']) ? TdSchemaRegistry::fromArray($array['selfie']) : null),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['translation']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'number' => $this->number,
            'expiration_date' => (isset($this->expirationDate) ? $this->expirationDate : null),
            'front_side' => $this->frontSide->typeSerialize(),
            'reverse_side' => (isset($this->reverseSide) ? $this->reverseSide : null),
            'selfie' => (isset($this->selfie) ? $this->selfie : null),
            array_map(fn($x) => $x->typeSerialize(), $this->translation),
        ];
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getExpirationDate(): ?Date
    {
        return $this->expirationDate;
    }

    public function getFrontSide(): DatedFile
    {
        return $this->frontSide;
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
}
