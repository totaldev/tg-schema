<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a type of a button in results of inline query
 */
class InlineQueryResultsButtonType extends TdObject
{
    public const TYPE_NAME = 'InlineQueryResultsButtonType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): InlineQueryResultsButtonType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
