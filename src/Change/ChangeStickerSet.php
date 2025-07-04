<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Change;

use Totaldev\TgSchema\TdFunction;

/**
 * Installs/uninstalls or activates/archives a sticker set.
 */
class ChangeStickerSet extends TdFunction
{
    public const TYPE_NAME = 'changeStickerSet';

    public function __construct(
        /**
         * Identifier of the sticker set.
         */
        protected int  $setId,
        /**
         * The new value of is_installed.
         */
        protected bool $isInstalled,
        /**
         * The new value of is_archived. A sticker set can't be installed and archived simultaneously.
         */
        protected bool $isArchived
    ) {}

    public static function fromArray(array $array): ChangeStickerSet
    {
        return new static(
            $array['set_id'],
            $array['is_installed'],
            $array['is_archived'],
        );
    }

    public function getIsArchived(): bool
    {
        return $this->isArchived;
    }

    public function getIsInstalled(): bool
    {
        return $this->isInstalled;
    }

    public function getSetId(): int
    {
        return $this->setId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'set_id'       => $this->setId,
            'is_installed' => $this->isInstalled,
            'is_archived'  => $this->isArchived,
        ];
    }
}
