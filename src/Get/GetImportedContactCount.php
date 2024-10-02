<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the total number of imported contacts.
 */
class GetImportedContactCount extends TdFunction
{
    public const TYPE_NAME = 'getImportedContactCount';

    public function __construct() {}

    public static function fromArray(array $array): GetImportedContactCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
