<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a sticker set by its identifier
 */
class GetStickerSet extends TdFunction
{
    public const TYPE_NAME = 'getStickerSet';

    /**
     * Identifier of the sticker set
     *
     * @var int
     */
    protected int $setId;

    public function __construct(int $setId)
    {
        $this->setId = $setId;
    }

    public static function fromArray(array $array): GetStickerSet
    {
        return new static(
            $array['set_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'set_id' => $this->setId,
        ];
    }

    public function getSetId(): int
    {
        return $this->setId;
    }
}
