<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a suggested name for a new sticker set with a given title.
 */
class GetSuggestedStickerSetName extends TdFunction
{
    public const TYPE_NAME = 'getSuggestedStickerSetName';

    public function __construct(
        /**
         * Sticker set title; 1-64 characters.
         */
        protected string $title
    ) {}

    public static function fromArray(array $array): GetSuggestedStickerSetName
    {
        return new static(
            $array['title'],
        );
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
        ];
    }
}
