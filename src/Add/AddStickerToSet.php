<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Input\InputSticker;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds a new sticker to a set; for bots only
 */
class AddStickerToSet extends TdFunction
{
    public const TYPE_NAME = 'addStickerToSet';

    /**
     * Sticker set name
     *
     * @var string
     */
    protected string $name;

    /**
     * Sticker to add to the set
     *
     * @var InputSticker
     */
    protected InputSticker $sticker;

    /**
     * Sticker set owner
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $userId, string $name, InputSticker $sticker)
    {
        $this->userId = $userId;
        $this->name = $name;
        $this->sticker = $sticker;
    }

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
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'name' => $this->name,
            'sticker' => $this->sticker->typeSerialize(),
        ];
    }
}
