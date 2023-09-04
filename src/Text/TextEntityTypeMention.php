<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Text;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A mention of a user, a supergroup, or a channel by their username
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
