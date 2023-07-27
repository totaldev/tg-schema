<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns available emojis categories
 */
class GetEmojiCategories extends TdFunction
{
    public const TYPE_NAME = 'getEmojiCategories';

    /**
     * Type of emoji categories to return; pass null to get default emoji categories
     *
     * @var EmojiCategoryType
     */
    protected EmojiCategoryType $type;

    public function __construct(EmojiCategoryType $type)
    {
        $this->type = $type;
    }

    public static function fromArray(array $array): GetEmojiCategories
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type' => $this->type->typeSerialize(),
        ];
    }

    public function getType(): EmojiCategoryType
    {
        return $this->type;
    }
}
