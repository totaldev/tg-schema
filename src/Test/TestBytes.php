<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A simple object containing a sequence of bytes; for testing only
 */
class TestBytes extends TdObject
{
    public const TYPE_NAME = 'testBytes';

    /**
     * Bytes
     *
     * @var string
     */
    protected string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function fromArray(array $array): TestBytes
    {
        return new static(
            $array['value'],
        );
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'value' => $this->value,
        ];
    }
}
