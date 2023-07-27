<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the list of emoji corresponding to a sticker; for bots only. The sticker must belong to a regular or custom emoji sticker set created by the bot
 */
class SetStickerEmojis extends TdFunction
{
    public const TYPE_NAME = 'setStickerEmojis';

    /**
     * Sticker
     *
     * @var InputFile
     */
    protected InputFile $sticker;

    /**
     * New string with 1-20 emoji corresponding to the sticker
     *
     * @var string
     */
    protected string $emojis;

    public function __construct(InputFile $sticker, string $emojis)
    {
        $this->sticker = $sticker;
        $this->emojis = $emojis;
    }

    public static function fromArray(array $array): SetStickerEmojis
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
            $array['emojis'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker' => $this->sticker->typeSerialize(),
            'emojis' => $this->emojis,
        ];
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }

    public function getEmojis(): string
    {
        return $this->emojis;
    }
}
