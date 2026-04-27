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
    public const string TYPE_NAME = 'changeStickerSet';

    public function __construct(
        /**
         * The new value of is_archived. A sticker set can't be installed and archived simultaneously.
         */
        protected bool $isArchived,
        /**
         * The new value of is_installed.
         */
        protected bool $isInstalled,
        /**
         * Identifier of the sticker set.
         */
        protected int  $setId,
    ) {}

    public static function fromArray(array $array): ChangeStickerSet
    {
        return new static(
            isArchived : $array['is_archived'],
            isInstalled: $array['is_installed'],
            setId      : $array['set_id'],
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

    public function setIsArchived(bool $value): static
    {
        $this->isArchived = $value;

        return $this;
    }

    public function setIsInstalled(bool $value): static
    {
        $this->isInstalled = $value;

        return $this;
    }

    public function setSetId(int $value): static
    {
        $this->setId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'is_archived'  => $this->isArchived,
            'is_installed' => $this->isInstalled,
            'set_id'       => $this->setId,
        ];
    }
}
