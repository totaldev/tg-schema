<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Text that must be formatted as if inside a pre HTML tag
 */
class TextEntityTypePre extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypePre';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypePre
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
