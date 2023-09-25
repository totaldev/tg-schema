<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Dated;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * File with the date it was uploaded
 */
class DatedFile extends TdObject
{
    public const TYPE_NAME = 'datedFile';

    /**
     * Point in time (Unix timestamp) when the file was uploaded
     *
     * @var int
     */
    protected int $date;

    /**
     * The file
     *
     * @var File
     */
    protected File $file;

    public function __construct(File $file, int $date)
    {
        $this->file = $file;
        $this->date = $date;
    }

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
            'file' => $this->file->typeSerialize(),
            'date' => $this->date,
        ];
    }
}
