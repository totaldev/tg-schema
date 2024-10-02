<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

use Totaldev\TgSchema\TdObject;

/**
 * Contains a part of a file.
 */
class FilePart extends TdObject
{
    public const TYPE_NAME = 'filePart';

    public function __construct(
        /**
         * File bytes.
         */
        protected string $data
    ) {}

    public static function fromArray(array $array): FilePart
    {
        return new static(
            $array['data'],
        );
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'data'  => $this->data,
        ];
    }
}
