<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The category must be used for chat photo emoji selection
 */
class EmojiCategoryTypeChatPhoto extends EmojiCategoryType
{
    public const TYPE_NAME = 'emojiCategoryTypeChatPhoto';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): EmojiCategoryTypeChatPhoto
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
