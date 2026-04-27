<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Diff;

/**
 * Addition of some text.
 */
class DiffEntityTypeInsert extends DiffEntityType
{
    public const string TYPE_NAME = 'diffEntityTypeInsert';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): DiffEntityTypeInsert
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
