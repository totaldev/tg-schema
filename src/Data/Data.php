<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Data;

use Totaldev\TgSchema\TdObject;

/**
 * Contains some binary data.
 */
class Data extends TdObject
{
    public const string TYPE_NAME = 'data';

    public function __construct(
        /**
         * Data.
         */
        protected string $data
    ) {}

    public static function fromArray(array $array): Data
    {
        return new static(
            data: $array['data'],
        );
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $value): static
    {
        $this->data = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'data'  => $this->data,
        ];
    }
}
