<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets a sticker set thumbnail; for bots only
 */
class SetStickerSetThumbnail extends TdFunction
{
    public const TYPE_NAME = 'setStickerSetThumbnail';

    /**
     * Sticker set owner
     *
     * @var int
     */
    protected int $userId;

    /**
     * Sticker set name
     *
     * @var string
     */
    protected string $name;

    /**
     * Thumbnail to set in PNG, TGS, or WEBM format; pass null to remove the sticker set thumbnail. Thumbnail format must match the format of stickers in the set
     *
     * @var InputFile
     */
    protected InputFile $thumbnail;

    public function __construct(int $userId, string $name, InputFile $thumbnail)
    {
        $this->userId = $userId;
        $this->name = $name;
        $this->thumbnail = $thumbnail;
    }

    public static function fromArray(array $array): SetStickerSetThumbnail
    {
        return new static(
            $array['user_id'],
            $array['name'],
            TdSchemaRegistry::fromArray($array['thumbnail']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'name' => $this->name,
            'thumbnail' => $this->thumbnail->typeSerialize(),
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getThumbnail(): InputFile
    {
        return $this->thumbnail;
    }
}
