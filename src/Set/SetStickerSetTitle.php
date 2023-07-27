<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets a sticker set title; for bots only
 */
class SetStickerSetTitle extends TdFunction
{
    public const TYPE_NAME = 'setStickerSetTitle';

    /**
     * Sticker set name
     *
     * @var string
     */
    protected string $name;

    /**
     * New sticker set title
     *
     * @var string
     */
    protected string $title;

    public function __construct(string $name, string $title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    public static function fromArray(array $array): SetStickerSetTitle
    {
        return new static(
            $array['name'],
            $array['title'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name' => $this->name,
            'title' => $this->title,
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
