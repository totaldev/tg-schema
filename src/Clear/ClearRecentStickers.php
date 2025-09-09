<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Clear;

use Totaldev\TgSchema\TdFunction;

/**
 * Clears the list of recently used stickers.
 */
class ClearRecentStickers extends TdFunction
{
    public const TYPE_NAME = 'clearRecentStickers';

    public function __construct(
        /**
         * Pass true to clear the list of stickers recently attached to photo or video files; pass false to clear the list of recently sent stickers.
         */
        protected bool $isAttached
    ) {}

    public static function fromArray(array $array): ClearRecentStickers
    {
        return new static(
            $array['is_attached'],
        );
    }

    public function getIsAttached(): bool
    {
        return $this->isAttached;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'is_attached' => $this->isAttached,
        ];
    }
}
