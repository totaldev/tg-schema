<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Encrypted;

use Totaldev\TgSchema\Dated\DatedFile;
use Totaldev\TgSchema\Passport\PassportElementType;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about an encrypted Telegram Passport element; for bots only.
 */
class EncryptedPassportElement extends TdObject
{
    public const string TYPE_NAME = 'encryptedPassportElement';

    public function __construct(
        /**
         * Encrypted JSON-encoded data about the user.
         */
        protected string              $data,
        /**
         * List of attached files.
         *
         * @var DatedFile[]
         */
        protected array               $files,
        /**
         * The front side of an identity document.
         */
        protected DatedFile           $frontSide,
        /**
         * Hash of the entire element.
         */
        protected string              $hash,
        /**
         * The reverse side of an identity document; may be null.
         */
        protected ?DatedFile          $reverseSide,
        /**
         * Selfie with the document; may be null.
         */
        protected ?DatedFile          $selfie,
        /**
         * List of files containing a certified English translation of the document.
         *
         * @var DatedFile[]
         */
        protected array               $translation,
        /**
         * Type of Telegram Passport element.
         */
        protected PassportElementType $type,
        /**
         * Unencrypted data, phone number or email address.
         */
        protected string              $value,
    ) {}

    public static function fromArray(array $array): EncryptedPassportElement
    {
        return new static(
            data       : $array['data'],
            files      : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['files']),
            frontSide  : TdSchemaRegistry::fromArray($array['front_side']),
            hash       : $array['hash'],
            reverseSide: (isset($array['reverse_side']) ? TdSchemaRegistry::fromArray($array['reverse_side']) : null),
            selfie     : (isset($array['selfie']) ? TdSchemaRegistry::fromArray($array['selfie']) : null),
            translation: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['translation']),
            type       : TdSchemaRegistry::fromArray($array['type']),
            value      : $array['value'],
        );
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function getFiles(): array
    {
        return $this->files;
    }

    public function getFrontSide(): DatedFile
    {
        return $this->frontSide;
    }

    public function getHash(): string
    {
        return $this->hash;
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

    public function getType(): PassportElementType
    {
        return $this->type;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setData(string $value): static
    {
        $this->data = $value;

        return $this;
    }

    public function setFiles(array $value): static
    {
        $this->files = $value;

        return $this;
    }

    public function setFrontSide(DatedFile $value): static
    {
        $this->frontSide = $value;

        return $this;
    }

    public function setHash(string $value): static
    {
        $this->hash = $value;

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

    public function setType(PassportElementType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function setValue(string $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'data'         => $this->data,
            'files'        => array_map(static fn($x) => $x->jsonSerialize(), $this->files),
            'front_side'   => $this->frontSide->jsonSerialize(),
            'hash'         => $this->hash,
            'reverse_side' => (null !== $this->reverseSide ? $this->reverseSide->jsonSerialize() : null),
            'selfie'       => (null !== $this->selfie ? $this->selfie->jsonSerialize() : null),
            'translation'  => array_map(static fn($x) => $x->jsonSerialize(), $this->translation),
            'type'         => $this->type->jsonSerialize(),
            'value'        => $this->value,
        ];
    }
}
