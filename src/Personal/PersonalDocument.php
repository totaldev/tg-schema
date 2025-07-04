<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Personal;

use Totaldev\TgSchema\Dated\DatedFile;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A personal document, containing some information about a user.
 */
class PersonalDocument extends TdObject
{
    public const TYPE_NAME = 'personalDocument';

    public function __construct(
        /**
         * List of files containing the pages of the document.
         *
         * @var DatedFile[]
         */
        protected array $files,
        /**
         * List of files containing a certified English translation of the document.
         *
         * @var DatedFile[]
         */
        protected array $translation
    ) {}

    public static function fromArray(array $array): PersonalDocument
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
            '@type'       => static::TYPE_NAME,
            'files'       => array_map(static fn($x) => $x->typeSerialize(), $this->files),
            'translation' => array_map(static fn($x) => $x->typeSerialize(), $this->translation),
        ];
    }
}
