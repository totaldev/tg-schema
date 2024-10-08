<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

/**
 * A mention of a user, a supergroup, or a channel by their username.
 */
class TextEntityTypeMention extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeMention';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypeMention
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
