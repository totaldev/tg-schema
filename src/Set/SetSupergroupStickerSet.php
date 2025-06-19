<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the sticker set of a supergroup; requires can_change_info administrator right.
 */
class SetSupergroupStickerSet extends TdFunction
{
    public const TYPE_NAME = 'setSupergroupStickerSet';

    public function __construct(
        /**
         * Identifier of the supergroup.
         */
        protected int $supergroupId,
        /**
         * New value of the supergroup sticker set identifier. Use 0 to remove the supergroup sticker set.
         */
        protected int $stickerSetId
    ) {}

    public static function fromArray(array $array): SetSupergroupStickerSet
    {
        return new static(
            $array['supergroup_id'],
            $array['sticker_set_id'],
        );
    }

    public function getStickerSetId(): int
    {
        return $this->stickerSetId;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'supergroup_id'  => $this->supergroupId,
            'sticker_set_id' => $this->stickerSetId,
        ];
    }
}
