<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A phone number
 */
class TextEntityTypePhoneNumber extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypePhoneNumber';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypePhoneNumber
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
