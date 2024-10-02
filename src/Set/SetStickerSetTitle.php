<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Sets a sticker set title.
 */
class SetStickerSetTitle extends TdFunction
{
    public const TYPE_NAME = 'setStickerSetTitle';

    public function __construct(
        /**
         * Sticker set name. The sticker set must be owned by the current user.
         */
        protected string $name,
        /**
         * New sticker set title.
         */
        protected string $title,
    ) {}

    public static function fromArray(array $array): SetStickerSetTitle
    {
        return new static(
            $array['name'],
            $array['title'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
            'title' => $this->title,
        ];
    }
}
