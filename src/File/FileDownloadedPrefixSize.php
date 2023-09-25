<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains size of downloaded prefix of a file
 */
class FileDownloadedPrefixSize extends TdObject
{
    public const TYPE_NAME = 'fileDownloadedPrefixSize';

    /**
     * The prefix size, in bytes
     *
     * @var int
     */
    protected int $size;

    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public static function fromArray(array $array): FileDownloadedPrefixSize
    {
        return new static(
            $array['size'],
        );
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'size' => $this->size,
        ];
    }
}
