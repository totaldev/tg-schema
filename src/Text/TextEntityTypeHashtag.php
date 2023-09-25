<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A hashtag text, beginning with "#"
 */
class TextEntityTypeHashtag extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeHashtag';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypeHashtag
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
