<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

use Totaldev\TgSchema\TdObject;

/**
 * Contains size of downloaded prefix of a file.
 */
class FileDownloadedPrefixSize extends TdObject
{
    public const string TYPE_NAME = 'fileDownloadedPrefixSize';

    public function __construct(
        /**
         * The prefix size, in bytes.
         */
        protected int $size
    ) {}

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

    public function setSize(int $value): static
    {
        $this->size = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'size'  => $this->size,
        ];
    }
}
