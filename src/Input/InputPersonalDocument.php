<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A personal document to be saved to Telegram Passport.
 */
class InputPersonalDocument extends TdObject
{
    public const TYPE_NAME = 'inputPersonalDocument';

    public function __construct(
        /**
         * List of files containing the pages of the document.
         *
         * @var InputFile[]
         */
        protected array $files,
        /**
         * List of files containing a certified English translation of the document.
         *
         * @var InputFile[]
         */
        protected array $translation
    ) {}

    public static function fromArray(array $array): InputPersonalDocument
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['files']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['translation']),
        );
    }

    public function getFiles(): array
    {
        return $this->files;
    }

    public function getTranslation(): array
    {
        return $this->translation;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->files),
            array_map(static fn($x) => $x->typeSerialize(), $this->translation),
        ];
    }
}
