<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Deleted a sticker set; for bots only
 */
class DeleteStickerSet extends TdFunction
{
    public const TYPE_NAME = 'deleteStickerSet';

    /**
     * Sticker set name
     *
     * @var string
     */
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function fromArray(array $array): DeleteStickerSet
    {
        return new static(
            $array['name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name' => $this->name,
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }
}
