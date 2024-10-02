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
    public const TYPE_NAME = 'encryptedPassportElement';

    public function __construct(
        /**
         * Type of Telegram Passport element.
         */
        protected PassportElementType $type,
        /**
         * Encrypted JSON-encoded data about the user.
         */
        protected string              $data,
        /**
         * The front side of an identity document.
         */
        protected DatedFile           $frontSide,
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
         * List of attached files.
         *
         * @var DatedFile[]
         */
        protected array               $files,
        /**
         * Unencrypted data, phone number or email address.
         */
        protected string              $value,
        /**
         * Hash of the entire element.
         */
        protected string              $hash,
    ) {}

    public static function fromArray(array $array): EncryptedPassportElement
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            $array['data'],
            TdSchemaRegistry::fromArray($array['front_side']),
            isset($array['reverse_side']) ? TdSchemaRegistry::fromArray($array['reverse_side']) : null,
            isset($array['selfie']) ? TdSchemaRegistry::fromArray($array['selfie']) : null,
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['translation']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['files']),
            $array['value'],
            $array['hash'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'type'         => $this->type->typeSerialize(),
            'data'         => $this->data,
            'front_side'   => $this->frontSide->typeSerialize(),
            'reverse_side' => (isset($this->reverseSide) ? $this->reverseSide : null),
            'selfie'       => (isset($this->selfie) ? $this->selfie : null),
            array_map(fn($x) => $x->typeSerialize(), $this->translation),
            array_map(fn($x) => $x->typeSerialize(), $this->files),
            'value'        => $this->value,
            'hash'         => $this->hash,
        ];
    }
}
