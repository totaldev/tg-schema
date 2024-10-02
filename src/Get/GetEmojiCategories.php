<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Emoji\EmojiCategoryType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns available emoji categories.
 */
class GetEmojiCategories extends TdFunction
{
    public const TYPE_NAME = 'getEmojiCategories';

    public function __construct(
        /**
         * Type of emoji categories to return; pass null to get default emoji categories.
         */
        protected EmojiCategoryType $type
    ) {}

    public static function fromArray(array $array): GetEmojiCategories
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getType(): EmojiCategoryType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type'  => $this->type->typeSerialize(),
        ];
    }
}
