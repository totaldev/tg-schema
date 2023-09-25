<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a part of a file
 */
class FilePart extends TdObject
{
    public const TYPE_NAME = 'filePart';

    /**
     * File bytes
     *
     * @var string
     */
    protected string $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

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
            'data' => $this->data,
        ];
    }
}
