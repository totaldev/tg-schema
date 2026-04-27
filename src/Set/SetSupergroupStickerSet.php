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
    public const string TYPE_NAME = 'setSupergroupStickerSet';

    public function __construct(
        /**
         * New value of the supergroup sticker set identifier. Use 0 to remove the supergroup sticker set.
         */
        protected int $stickerSetId,
        /**
         * Identifier of the supergroup.
         */
        protected int $supergroupId,
    ) {}

    public static function fromArray(array $array): SetSupergroupStickerSet
    {
        return new static(
            stickerSetId: $array['sticker_set_id'],
            supergroupId: $array['supergroup_id'],
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

    public function setStickerSetId(int $value): static
    {
        $this->stickerSetId = $value;

        return $this;
    }

    public function setSupergroupId(int $value): static
    {
        $this->supergroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'sticker_set_id' => $this->stickerSetId,
            'supergroup_id'  => $this->supergroupId,
        ];
    }
}
