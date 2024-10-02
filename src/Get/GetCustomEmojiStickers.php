<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of custom emoji stickers by their identifiers. Stickers are returned in arbitrary order. Only found stickers are returned.
 */
class GetCustomEmojiStickers extends TdFunction
{
    public const TYPE_NAME = 'getCustomEmojiStickers';

    public function __construct(
        /**
         * Identifiers of custom emoji stickers. At most 200 custom emoji stickers can be received simultaneously.
         *
         * @var int[]
         */
        protected array $customEmojiIds
    ) {}

    public static function fromArray(array $array): GetCustomEmojiStickers
    {
        return new static(
            $array['custom_emoji_ids'],
        );
    }

    public function getCustomEmojiIds(): array
    {
        return $this->customEmojiIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'custom_emoji_ids' => $this->customEmojiIds,
        ];
    }
}
