<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Input\InputSticker;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds a new sticker to a set.
 */
class AddStickerToSet extends TdFunction
{
    public const TYPE_NAME = 'addStickerToSet';

    public function __construct(
        /**
         * Sticker set owner; ignored for regular users.
         */
        protected int          $userId,
        /**
         * Sticker set name. The sticker set must be owned by the current user, and contain less than 200 stickers for custom emoji sticker sets and less than 120 otherwise.
         */
        protected string       $name,
        /**
         * Sticker to add to the set.
         */
        protected InputSticker $sticker
    ) {}

    public static function fromArray(array $array): AddStickerToSet
    {
        return new static(
            $array['user_id'],
            $array['name'],
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSticker(): InputSticker
    {
        return $this->sticker;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
            'name'    => $this->name,
            'sticker' => $this->sticker->typeSerialize(),
        ];
    }
}
