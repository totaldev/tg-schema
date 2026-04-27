<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Dated;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * File with the date it was uploaded.
 */
class DatedFile extends TdObject
{
    public const string TYPE_NAME = 'datedFile';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the file was uploaded.
         */
        protected int  $date,
        /**
         * The file.
         */
        protected File $file,
    ) {}

    public static function fromArray(array $array): DatedFile
    {
        return new static(
            date: $array['date'],
            file: TdSchemaRegistry::fromArray($array['file']),
        );
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getFile(): File
    {
        return $this->file;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setFile(File $value): static
    {
        $this->file = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'date'  => $this->date,
            'file'  => $this->file->jsonSerialize(),
        ];
    }
}
