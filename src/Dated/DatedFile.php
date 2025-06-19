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
    public const TYPE_NAME = 'datedFile';

    public function __construct(
        /**
         * The file.
         */
        protected File $file,
        /**
         * Point in time (Unix timestamp) when the file was uploaded.
         */
        protected int  $date
    ) {}

    public static function fromArray(array $array): DatedFile
    {
        return new static(
            TdSchemaRegistry::fromArray($array['file']),
            $array['date'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file'  => $this->file->typeSerialize(),
            'date'  => $this->date,
        ];
    }
}
