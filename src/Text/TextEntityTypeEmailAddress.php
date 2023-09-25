<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An email address
 */
class TextEntityTypeEmailAddress extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeEmailAddress';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypeEmailAddress
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
