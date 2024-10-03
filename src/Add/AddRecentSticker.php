<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Manually adds a new sticker to the list of recently used stickers. The new sticker is added to the top of the list. If the sticker was already in the list,
 * it is removed from the list first. Only stickers belonging to a sticker set or in WEBP or WEBM format can be added to this list. Emoji stickers can't be
 * added to recent stickers.
 */
class AddRecentSticker extends TdFunction
{
    public const TYPE_NAME = 'addRecentSticker';

    public function __construct(
        /**
         * Pass true to add the sticker to the list of stickers recently attached to photo or video files; pass false to add the sticker to the list of recently sent stickers.
         */
        protected bool      $isAttached,
        /**
         * Sticker file to add.
         */
        protected InputFile $sticker,
    ) {}

    public static function fromArray(array $array): AddRecentSticker
    {
        return new static(
            $array['is_attached'],
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function getIsAttached(): bool
    {
        return $this->isAttached;
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'is_attached' => $this->isAttached,
            'sticker'     => $this->sticker->typeSerialize(),
        ];
    }
}
