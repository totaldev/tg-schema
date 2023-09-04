<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The category must be used by default
 */
class EmojiCategoryTypeDefault extends EmojiCategoryType
{
    public const TYPE_NAME = 'emojiCategoryTypeDefault';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): EmojiCategoryTypeDefault
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
