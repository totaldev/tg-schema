<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Me;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A URL linking to a sticker set
 */
class TMeUrlTypeStickerSet extends TMeUrlType
{
    public const TYPE_NAME = 'tMeUrlTypeStickerSet';

    /**
     * Identifier of the sticker set
     *
     * @var int
     */
    protected int $stickerSetId;

    public function __construct(int $stickerSetId)
    {
        parent::__construct();

        $this->stickerSetId = $stickerSetId;
    }

    public static function fromArray(array $array): TMeUrlTypeStickerSet
    {
        return new static(
            $array['sticker_set_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker_set_id' => $this->stickerSetId,
        ];
    }

    public function getStickerSetId(): int
    {
        return $this->stickerSetId;
    }
}
