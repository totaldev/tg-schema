<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Removes a sticker from the list of recently used stickers.
 */
class RemoveRecentSticker extends TdFunction
{
    public const string TYPE_NAME = 'removeRecentSticker';

    public function __construct(
        /**
         * Pass true to remove the sticker from the list of stickers recently attached to photo or video files; pass false to remove the sticker from the list of recently sent stickers.
         */
        protected bool      $isAttached,
        /**
         * Sticker file to delete.
         */
        protected InputFile $sticker,
    ) {}

    public static function fromArray(array $array): RemoveRecentSticker
    {
        return new static(
            isAttached: $array['is_attached'],
            sticker   : TdSchemaRegistry::fromArray($array['sticker']),
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

    public function setIsAttached(bool $value): static
    {
        $this->isAttached = $value;

        return $this;
    }

    public function setSticker(InputFile $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'is_attached' => $this->isAttached,
            'sticker'     => $this->sticker->jsonSerialize(),
        ];
    }
}
