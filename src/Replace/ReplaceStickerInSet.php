<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Replace;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\Input\InputSticker;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Replaces existing sticker in a set. The function is equivalent to removeStickerFromSet, then addStickerToSet, then setStickerPositionInSet.
 */
class ReplaceStickerInSet extends TdFunction
{
    public const string TYPE_NAME = 'replaceStickerInSet';

    public function __construct(
        /**
         * Sticker set name. The sticker set must be owned by the current user.
         */
        protected string       $name,
        /**
         * Sticker to add to the set.
         */
        protected InputSticker $newSticker,
        /**
         * Sticker to remove from the set.
         */
        protected InputFile    $oldSticker,
        /**
         * Sticker set owner; ignored for regular users.
         */
        protected int          $userId,
    ) {}

    public static function fromArray(array $array): ReplaceStickerInSet
    {
        return new static(
            name      : $array['name'],
            newSticker: TdSchemaRegistry::fromArray($array['new_sticker']),
            oldSticker: TdSchemaRegistry::fromArray($array['old_sticker']),
            userId    : $array['user_id'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNewSticker(): InputSticker
    {
        return $this->newSticker;
    }

    public function getOldSticker(): InputFile
    {
        return $this->oldSticker;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function setNewSticker(InputSticker $value): static
    {
        $this->newSticker = $value;

        return $this;
    }

    public function setOldSticker(InputFile $value): static
    {
        $this->oldSticker = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'name'        => $this->name,
            'new_sticker' => $this->newSticker->jsonSerialize(),
            'old_sticker' => $this->oldSticker->jsonSerialize(),
            'user_id'     => $this->userId,
        ];
    }
}
